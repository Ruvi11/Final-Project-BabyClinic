<?php

namespace App\Http\Controllers;

use Mail;
use App\Models\User;
use App\Mail\NewUserWelcome;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;




class ClinicController extends Controller
{
    public function index()
    {
        return view('Admin.CreateClinics');
    }

    public function create(Request $request)
    {
        $request->validate([
            'Name' => 'required|string|max:255',
            'Email' => 'required|email|unique:users,email',
            'Contact' => 'required',
            'Password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'name' => $request->Name,
            'email' => $request->Email,
            'contact' => $request->Contact,
            'password' => Hash::make($request->Password),
            'role' => 'clinic',
        ]);

        return redirect()->route('home')->with('success', 'Clinic created successfully.');
    }

    public function listTasks()
    {
        $tasks = User::where('role', 'clinic')->get();
        return view('Admin.index', compact('tasks'));
    }

    public function edit($id)
    {
        $task = User::findOrFail($id);
        return view('Admin.edit', compact('task'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'Name' => 'required|string|max:255',
            'Email' => 'required|email|unique:users,email,' . $id,
            'Contact' => 'required',
        ]);

        $user = User::findOrFail($id);
        $user->name = $request->Name;
        $user->email = $request->Email;
        $user->contact = $request->Contact;
        $user->save();

        return redirect()->route('tasks.index')->with('success', 'Task updated successfully.');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('tasks.index')->with('success', 'Task deleted successfully.');
    }
}
