<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Task Manager</title>
</head>
<style>
    .back-button {
        background-color: white;
        /* Green */
        border: none;
        color: black;
        padding: 10px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        border-radius: 4px;
    }
</style>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <button class="back-button" onclick="goBack()">Back</button>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                {{-- <li class="nav-item">
                <a class="nav-link" href="{{ url('index') }}" style="color:white;margin-right:10px;">Clinic</a>
                </li> --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="priorityDropdown" role-="button" data-toggle="dropdown" style="color:white;margin-right:50px;">
                        Clinic
                    </a>
                    <div class="dropdown-menu" aria-labelledby="priorityDropdown">
                        <a class="dropdown-item" href="{{ url('create-clinics') }}">Create Clinic</a>
                        <a class="dropdown-item" href="">Manage Clinics</a>
                    </div>
                <li class="nav-item">


                </li>
                </li>
                <li class="nav-item">
                    <a class="btn btn-light rounded-pill" href="{{ url('/') }}" style="margin-right:50px;">Logout</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container" style="margin-top: 20px;">
        @if ($tasks && $tasks->count() > 0)
        <div class="table-responsive">
            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Namw</th>
                        <th>Email</th>
                        <th>Contact</th>
                        <th>Role</th>
                        <th>Created_at</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tasks as $task)
                    <tr class="{{ $task->days < 1 &&  $task->status == 'incomplete' ? 'table-danger' : '' }}">
                        <td>{{ $task->id }}</td>
                        <td>{{ $task->name }}</td>
                        <td>{{ $task->email }}</td>
                        <td>
                            {{$task->contact}}
                        </td>
                        <td>
                            {{$task->role}}
                        </td>
                        <td>{{ $task->created_at }}</td>
                        <td>
                            <a class="btn btn-primary btn-sm" href=" " style="width:80px;">Edit</a>
                        </td>
                        <td>
                            <form action="" method="POST">
                                @csrf
                                @method('POST')
                                <button type="submit" class="btn btn-danger btn-sm" style="width:80px;">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @else
        <p style="color: red; text-align: center; font-weight: bold; margin-top: 20px;">No tasks found.</p>
        @endif
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
</body>

</html>




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
