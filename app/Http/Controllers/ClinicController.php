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

        // Send welcome email
        // Mail::to($user->email)->send(new NewUserWelcome($user, $request->Password));


        return redirect()->route('home')->with('success', 'Clinic created successfully.');
    }

}
