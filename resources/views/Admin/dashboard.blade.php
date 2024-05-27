<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    @include('library.styles')

    <link href="admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="admin/css/sb-admin-2.min.css" rel="stylesheet">


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
        background: lightseagreen;
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
</style>

<body>
    <div class="wrapper">
        <div class="sidebar">
            <div class="profile">
                <img src="../assets/img/4logo.png" alt="profile_picture">
                <h3>Admin</h3>
                <p>Dashboard</p>
            </div>
            <ul>
                <li><a href="" class="active"><i class="fas fa-home"></i> My dashboard</a></li>
                <li><a href="{{ url('/employee') }}">Report</a></li>
                <li><a href="Admin/index">Create Clinic</a></li>
                <li><a href="posts/create">Add News</a></li>
                <li> <a href="/event">Charts</a></li>
                <li><a href="create-clinics">Announcment</a></li>
                <li><a href="">Feedback</a></li>

            </ul>
        </div>
        <div class="section">
            <div class="top_navbar">
                <a href="#" class="hamburger"><i class="fas fa-bars"></i></a>

                <form class="form-inline my-2 my-lg-0 ">
                    <input class="form-control" type="search" placeholder="Search" aria-label="Search">

                </form>
                <li class="nav-item">
                    <a class="btn btn-light rounded-pill" href="{{ url('/') }}" style="margin-left:750px;">Logout</a>
                </li>

            </div>
            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">MOH MAHO</h1>
                    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                </div>

                <!-- Content Row -->
                <div class="row">

                    <!-- report (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            Report (Monthly)</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">4</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                            Clinics</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">4</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-info shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Midwife
                                        </div>
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-auto">
                                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">5</div>
                                            </div>
                                            <div class="col">
                                                <div class="progress progress-sm mr-2">
                                                    <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pending Requests Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-warning shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                            Pending Feedback</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-comments fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Content Row -->

                <div class="row">

                    <!-- Area Chart -->
                    <div class="col-xl-8 col-lg-67">
                        <div class="card shadow mb-24">
                            <!-- Card Header - Dropdown -->
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">clinic details</h6>
                                <div class="dropdown no-arrow">
                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                        <div class="dropdown-header">Dropdown Header:</div>
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Card Body -->
                            <div class="card-body">
                                <div class="chart-area">
                                    <canvas id="myAreaChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content">
                        <!-- content here -->


                        @yield('content')

                        @include('library.scripts')

                    </div>
                </div>
            </div>

            <script src="script.js"></script>
            <!-- Bootstrap core JavaScript-->
            <script src="admin/vendor/jquery/jquery.min.js"></script>
            <script src="admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

            <!-- Core plugin JavaScript-->
            <script src="admin/vendor/jquery-easing/jquery.easing.min.js"></script>

            <!-- Custom scripts for all pages-->
            <script src="admin/js/sb-admin-2.min.js"></script>

            <!-- Page level plugins -->
            <script src="admin/vendor/chart.js/Chart.min.js"></script>

            <!-- Page level custom scripts -->
            <script src="admin/js/demo/chart-area-demo.js"></script>
            <script src="admin/js/demo/chart-pie-demo.js"></script>
</body>

</html>