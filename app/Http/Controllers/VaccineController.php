<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use App\Models\Vaccine;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class VaccineController extends Controller
{
    protected $vaccine;
    public function __construct()
    {
        $this->vaccine = new Vaccine();
    }
    public function index()
    {
        $response['vaccines'] = $this->vaccine->where('clinic_id', Auth::id())->get();
        return view('vaccine.vaccine')->with($response);
    }
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'v_name' => 'required',
            'v_id' => 'required',
            'vac_date' => 'required|date'
        ]);

        // Create a new vaccine record in the database
        $this->vaccine->create([
            'clinic_id' => Auth::id(),
            'v_name' => $request->input('v_name'),
            'v_id' => $request->input('v_id'),
            'vac_date' => $request->input('vac_date')
        ]);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Vaccine record created successfully.');
    }

    public function edit(string $id)
    {
        $response['vaccine'] = $this->vaccine->find($id);
        return view('vaccine.edit')->with($response);
    }
    public function update(Request $request, string $id)
    {
        $vaccine = $this->vaccine->find($id);
        $vaccine->update(array_merge($vaccine->toArray(), $request->toArray()));
        return redirect('vaccine');
    }


    public function destroy(string $id)
    {
        $vaccine = $this->vaccine->find($id);
        $vaccine->delete();
        return redirect('vaccine');
    }
}
