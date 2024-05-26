<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use App\Models\Employee;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmployeeController extends Controller
{
    protected $employee;
    public function __construct()
    {
        $this->employee = new Employee();
    }
    public function index()
    {
        $response['employees'] = $this->employee->where('clinic_id', Auth::id())->get();
        return view('mother.index')->with($response);
    }

    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'emp_name' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required|email|unique:employees,email',
            'password' => 'required|min:6'
        ]);

        // Create a new employee record in the database
        $this->employee->create([
            'clinic_id' => Auth::id(),
            'emp_name' => $request->input('emp_name'),
            'address' => $request->input('address'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')) // Hash the password before storing it
        ]);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Employee created successfully.');
    }

    public function edit(string $id)
    {
        $response['employee'] = $this->employee->find($id);
        return view('mother.edit')->with($response);
    }
    public function update(Request $request, string $id)
    {
        $employee = $this->employee->find($id);
        $employee->update(array_merge($employee->toArray(), $request->toArray()));
        return redirect('employee');
    }


    public function destroy(string $id)
    {
        $employee = $this->employee->find($id);
        $employee->delete();
        return redirect('employee');
    }
}
