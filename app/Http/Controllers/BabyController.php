<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use App\Models\Baby;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Employee;


class BabyController extends Controller
{
    protected $baby;
    protected $employee;
    public function __construct()
    {
        $this->baby = new Baby();
        $this->employee = new Employee();
    }
    public function index()
    {
        $response['babies'] = $this->baby->join('employees', 'babies.emp_id', '=', 'employees.id')->select('babies.*', 'employees.emp_name')->where('babies.clinic_id', Auth::id())->get();
        $response['employees'] = $this->employee->where('clinic_id', Auth::id())->get();
        return view('baby.child')->with($response);
    }
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'b_name' => 'required',
            'parent_id' => 'required',
            'address' => 'required',
            'b_age' => 'required',
            'gender' => 'required',
            'born_weight' => 'required',
            'bdy' => 'required|date'
        ]);

        // Create a new baby record in the database
        $this->baby->create([
            'clinic_id' => Auth::id(),
            'emp_id' => $request->input('parent_id'),
            'b_name' => $request->input('b_name'),
            'address' => $request->input('address'),
            'b_age' => $request->input('b_age'),
            'gender' => $request->input('gender'),
            'born_weight' => $request->input('born_weight'),
            'bdy' => $request->input('bdy')
        ]);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Baby record created successfully.');
    }

    public function edit(string $id)
    {
        $response['baby'] = $this->baby->find($id);
        return view('baby.edit')->with($response);
    }
    public function update(Request $request, string $id)
    {
        $baby = $this->baby->find($id);
        $baby->update(array_merge($baby->toArray(), $request->toArray()));
        return redirect('baby');
    }


    public function destroy(string $id)
    {
        $baby = $this->baby->find($id);
        $baby->delete();
        return redirect('baby');
    }
}
