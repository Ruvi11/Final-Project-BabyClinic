<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Midwife Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    @include('library.styles')
</head>
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
        background: darkblue;
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
        border-radius: 100%;
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

    .sidebar ul li {
        position: relative;
    }

    .sidebar ul li a {
        display: flex;
        align-items: center;
        padding: 13px 30px;
        border-bottom: 1px solid #10558d;
        color: rgb(241, 237, 237);
        font-size: 16px;
        transition: all 0.3s ease;
    }

    .sidebar ul li a .icon {
        color: #dee4ec;
        width: 30px;
        text-align: center;
        margin-right: 10px;
        font-size: 18px;
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
        justify-content: space-between;
        padding: 0 30px;
    }

    .top_navbar .hamburger a {
        font-size: 28px;
        color: #f4fbff;
    }

    .top_navbar .hamburger a:hover {
        color: #a2ecff;
    }

    .top_navbar .search-container {
        display: flex;
        align-items: center;
    }

    .top_navbar .search-container input[type="text"] {
        padding: 5px 10px;
        font-size: 16px;
        border: none;
        border-radius: 3px;
    }

    .top_navbar .search-container button {
        padding: 6px 10px;
        margin-left: 8px;
        background: #ffffff;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }

    .top_navbar .search-container button i {
        color: #000;
    }

    .top_navbar .search-container button:hover {
        background: #f4fbff;
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

    /* Report CSS */
    .report-container {
        width: 80%;
        margin: 20px auto;
        background: #fff;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-radius: 5px;
    }

    h1 {
        text-align: center;
        color: #333;
    }

    .report-table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    .report-table th,
    .report-table td {
        padding: 10px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    .report-table th {
        background-color: #f2f2f2;
    }

    .report-table tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    .report-table tr:hover {
        background-color: #f1f1f1;
    }
</style>

<body>
    <div class="wrapper">
        <div class="sidebar">
            <div class="profile">
                <img src="../assets/img/4logo.png" alt="">
                <h3>Midwife Dashboard</h3>
                <h4>
                    <p>Daladagama Clinic
                </h4>
                </p>
            </div>
            <ul>
                <li><a href="" class="active"><i class="fas fa-home icon"></i> Home</a></li>
                <li><a href="{{ url('/employee') }}"><i class="fas fa-user-plus icon"></i> Add Parent</a></li>
                <li><a href="{{ url('/baby') }}"><i class="fas fa-baby icon"></i> Add Baby</a></li>
                <li><a href="{{ url('/vaccine') }}"><i class="fas fa-syringe icon"></i> Add Vaccine</a></li>
                <li><a href="posts/create"><i class="fas fa-chart-line icon"></i> Growth Chart</a></li>
                <li><a href="/mychild"><i class="fas fa-file-alt icon"></i> Report</a></li>
                <li><a href="/"><i class="fas fa-sign-out-alt icon"></i> Log Out</a></li>
            </ul>
        </div>
        <div class="section">
            <div class="top_navbar">
                <a href="#" class="hamburger"><i class="fas fa-bars"></i></a>
                <div class="search-container">
                    <input type="text" placeholder="Search..">
                    <button type="submit"><i class="fas fa-search"></i></button>
                </div>
            </div>
            <div class="content">
                <!-- content here -->
                <div class="report-container">
                    <h1> Report of Registered users</h1>
                    <table class="report-table">
                        <thead>
                            <tr>
                                <th>Parent Name</th>
                                <th>Baby Name</th>
                                <th>Address</th>
                                <th>Phone</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Sample Data Rows -->
                            <tr>
                                <td>Jane Doe</td>
                                <td>Denethi sudarshi</td>
                                <td>123 Main St, Springfield</td>
                                <td>(123) 456-7890</td>
                                <td>jane.doe@example.com</td>
                            </tr>
                            <tr>
                                <td>Mary Smith</td>
                                <td>Denethi sudarshi</td>
                                <td>456 Elm St, Springfield</td>
                                <td>(123) 555-7890</td>
                                <td>mary.smith@example.com</td>
                            </tr>
                            <tr>
                                <td>Mary Smith</td>
                                <td>Denethi sudarshi</td>
                                <td>456 Elm St, Springfield</td>
                                <td>(123) 555-7890</td>
                                <td>mary.smith@example.com</td>
                            </tr>
                            <tr>
                                <td>Mary Smith</td>
                                <td>Denethi sudarshi</td>
                                <td>456 Elm St, Springfield</td>
                                <td>(123) 555-7890</td>
                                <td>mary.smith@example.com</td>
                            </tr>
                            <tr>
                                <td>Mary Smith</td>
                                <td>Denethi sudarshi</td>
                                <td>456 Elm St, Springfield</td>
                                <td>(123) 555-7890</td>
                                <td>mary.smith@example.com</td>
                            </tr>
                            <tr>
                                <td>Mary Smith</td>
                                <td>Denethi sudarshi</td>
                                <td>456 Elm St, Springfield</td>
                                <td>(123) 555-7890</td>
                                <td>mary.smith@example.com</td>
                            </tr>
                            <!-- More data rows can be added here -->
                        </tbody>
                    </table>
                </div>
                @yield('content')
                @include('library.scripts')
            </div>
        </div>
    </div>

    <script src="script.js">
        document.addEventListener('DOMContentLoaded', function() {
            const body = document.querySelector('body');
            const hamburger = document.querySelector('.hamburger a');

            hamburger.addEventListener('click', function(e) {
                e.preventDefault();
                body.classList.toggle('active');
            });
        });
    </script>
</body>

</html>