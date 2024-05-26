<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function index()
    {
        return view('Auth.login');
    }

    public function register()
    {
        return view('Auth.register');
    }

    public function postRegistration(Request $request)
    {

        //dd($request->all());
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'confirmPassword' => 'required|same:password'
        ]);
        $data = $request->all();
        $createUser = $this->create($data);
        return redirect('login')->withSuccess('You Are Registered Successfully');
    }

    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => $data['password'],
            'confirmPassword' => $data['confirmPassword']
        ]);
    }

    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $checkLogin = $request->only('email', 'password');
        if (Auth::attempt($checkLogin)) {
            // Authentication passed...
            $user = Auth::user();
            // Check user role and redirect accordingly
            if ($user->role == 'admin') {
                return redirect('/dashboard')->withSuccess('Login Successfully');
            } elseif ($user->role == 'clinic') {
                return redirect('/Layout')->withSuccess('Login Successfully');
            } elseif ($user->role == 'patient') {
                return redirect('patient/index')->withSuccess('Login Successfully');
            } else {
                return redirect('login')->withSuccess('Login Failed. UnAuthorized User');
            }
        }

        return redirect('login')->withSuccess('Login Failed. Invalid Credentials');
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect('login');
    }

    public function home()
    {
        if (Auth::check()) {

            $tasks = User::where('role', 'clinic')->get(); // Retrieve tasks associated with the user.
            return view('Admin/index', ['tasks' => $tasks]);
        }
        return redirect('login')->with('error', 'Please log in to access the home page.')->withInput();
    }
}
