</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @include('library.styles')

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Add a black background color to the top navigation bar */
        .topnav {
            overflow: hidden;
            background-color: gray;
        }

        /* Style the links inside the navigation bar */
        .topnav a {
            float: left;
            display: block;
            color: black;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        /* Change the color of links on hover */
        .topnav a:hover {
            background-color: #ddd;
            color: black;
        }

        /* Style the "active" element to highlight the current page */
        .topnav a.active {
            background-color: burlywood;
            color: burlywood;
        }

        /* Style the search box inside the navigation bar */
        .topnav input[type=text] {
            float: right;
            padding: 6px;
            border: none;
            margin-top: 8px;
            margin-right: 16px;
            font-size: 17px;
        }

        /* When the screen is less than 600px wide, stack the links and the search field vertically instead of horizontally */
        @media screen and (max-width: 600px) {

            .topnav a,
            .topnav input[type=text] {
                float: none;
                display:black;
                text-align: left;
                width: 100%;
                margin: 0;
                padding: 30px;
            }

            .topnav input[type=text] {
                border: 1px solid #ccc;
            }
        }

        /* The side navigation menu */
        .sidebar {
            margin: 0;
            padding: 0;
            width: 200px;
            background-color: gray;
            position: fixed;
            height: 100%;
            overflow: auto;
        }

        /* Sidebar links */
        .sidebar a {
            display: block;
            color: white;
            padding: 16px;
            text-decoration: none;
        }

        /* Active/current link */
        .sidebar a.active {
            background-color:gray;
            color:black;
        }
        

        /* Links on mouse-over */
        .sidebar a:hover:not(.active) {
            background-color: #555;
            color: white;
        }

        /* Page content. The value of the margin-left property should match the value of the sidebar's width property */
        div.content {
            margin-left: 200px;
            padding: 1px 16px;
            height: 1000px;
        }

        /* On screens that are less than 700px wide, make the sidebar into a topbar */
        @media screen and (max-width: 700px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
            }

            .sidebar a {
                float: left;
            }

            div.content {
                margin-left: 0;
            }
        }

        /* On screens that are less than 400px, display the bar vertically, instead of horizontally */
        @media screen and (max-width: 400px) {
            .sidebar a {
                text-align: center;
                float: none;
            }
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#" style="margin-left:100px;">Thisnampalagama Clinic</a>
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
                    <a class="nav-link" href="" style="color:white;margin-right:10px;">Manage Patients</a>
                </li>
                </li>
                <li class="nav-item">
                    <a class="btn btn-light rounded-pill" href="{{ url('/') }}" style="margin-right:100px;">Search</a>
                </li>
            </ul>
        </div>
    </nav>


    <!-- The sidebar -->

    <div class="row">
        <div class="col-md-3">


            <!-- The sidebar -->
            <div class="sidebar">
                <a class="active" href="#home">Midwife Dashboard</a>
                <a href="{{ url('/employee') }}">Add parent</a>
                <a href="/baby">Add Baby</a>
                <a href="/vac">Add vaccine</a>
                <a href="/grow">Growth chart</a>
                <a href="">Report</a>
                <a href='/'>LogOut</a>
            </div>
        </div>

        <div class=" col-md-9">




            @yield('content')

            @include('library.scripts')
        </div>
    </div>




</body>

</html>