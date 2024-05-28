<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    @include('library.styles')

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans&display=swap');

        * {
            list-style: none;
            text-decoration: none;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Open Sans', sans-serif;
        }

        body {
            background-color: #e7f2fd;
            transition: all 0.5s ease;
        }

        .wrapper {
            display: flex;
        }

        .sidebar {
            width: 225px;
            background: darkcyan;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            transition: all 0.5s ease;
        }

        .sidebar .profile {
            margin-bottom: 30px;
            text-align: center;
        }

        .sidebar .profile img {
            display: block;
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin: 0 auto;
        }

        .sidebar .profile h3 {
            color: #ffffff;
            margin: 10px 0 5px;
        }

        .sidebar .profile p {
            color: rgb(206, 240, 253);
            font-size: 14px;
        }

        .sidebar ul li a {
            display: block;
            padding: 13px 30px;
            border-bottom: 1px solid #10558d;
            color: rgb(241, 237, 237);
            font-size: 16px;
            position: relative;
        }

        .sidebar ul li a .icon {
            color: #dee4ec;
            width: 30px;
            display: inline-block;
        }

        .sidebar ul li a:hover,
        .sidebar ul li a.active {
            color: #0c7db1;
            background: white;
            border-right: 2px solid rgb(5, 68, 104);
        }

        .sidebar ul li a:hover .icon,
        .sidebar ul li a.active .icon {
            color: #0c7db1;
        }

        .sidebar ul li a:hover:before,
        .sidebar ul li a.active:before {
            display: block;
        }

        .section {
            width: calc(100% - 225px);
            margin-left: 225px;
            transition: all 0.5s ease;
        }

        .top_navbar {
            background: rgb(7, 105, 185);
            height: 80px;
            display: flex;
            align-items: center;
            padding: 0 30px;
        }

        .top_navbar .hamburger a {
            font-size: 28px;
            color: #f4fbff;
        }

        .top_navbar .hamburger a:hover {
            color: #a2ecff;
        }

        body.active .wrapper .sidebar {
            left: -225px;
        }

        body.active .wrapper .section {
            margin-left: 0;
            width: 100%;
        }

        .navbar {
            width: 100%;
        }

        .form-container {
            background-color: #fff;
            padding: 20px 40px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            width: 100%;
            margin: 30px auto;
            text-align: center;
        }

        .account-image {
            width: 150px;
            height: auto;
            border-radius: 50%;
            margin-bottom: 20px;
        }

        h2 {
            margin-bottom: 20px;
            color: #333;
        }

        .form-group {
            margin-bottom: 15px;
            text-align: left;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }

        input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            color: #333;
            background-color: #f9f9f9;
        }

        input[readonly] {
            background-color: #e9e9e9;
            color: #777;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="sidebar">
            <div class="profile">
                <img src="../assets/img/userlogo.jpg" alt="">
                <h3>My Profile</h3>
            </div>
            <ul>
                <li><a href="" class="active"><i class="fas fa-home"></i> My Profile</a></li>
                <li><a href="/user">My Account</a></li>
                <li><a href="/mychild">Baby Profile</a></li>
                <li> <a href="{{ url('/vaccine') }}">vaccine Details</a></li>
                <li><a href="">Growth chart</a></li>
                <li><a href="">Add Growth chartReport</a></li>
                <li><a href='/'>LogOut</a></li>
            </ul>
        </div>
        <div class="section">
            <div class="top_navbar">
                <a href="#" class="hamburger"><i class="fas fa-bars"></i></a>
                <form class="form-inline my-2 my-lg-0 ">
                    <input class="form-control" type="text" placeholder="clinic name" aria-label="Search">
                </form>
            </div>
            <div class="content">
                <!-- content here -->
                <div class="form-container">
                    <img src="../assets/img/my1.jpg" alt="My Account" class="account-image">
                    <h2>My Account</h2>
                    <form>
                        <div class="form-group">
                            <label for="parentId">Parent Id</label>
                            <input type="text" id="parentId" name="parentId" value="1" readonly>
                        </div>
                        <div class="form-group">
                            <label for="parentName">Parent Name</label>
                            <input type="text" id="parentName" name="parentName" value="John Doe" readonly>
                        </div>
                        <div class="form-group">
                            <label for="clinicId">Clinic Id</label>
                            <input type="text" id="clinicId" name="clinicId" value="101" readonly>
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" id="address" name="address" value="123 Main St, Anytown" readonly>
                        </div>
                        <div class="form-group">
                            <label for="regDate">Reg Date</label>
                            <input type="date" id="regDate" name="regDate" value="2023-05-01" readonly>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" value="john.doe@example.com" readonly>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="tel" id="phone" name="phone" value="(555) 555-5555" readonly>
                        </div>
                    </form>
                </div>
                @yield('content')
                @include('library.scripts')
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>

</html>