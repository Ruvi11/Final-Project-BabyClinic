<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<style>
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
        background: darkslateblue;
        height: 100vh;
        position: fixed;
        top: 0;
        left: 0;
        transition: all 0.5s ease;
    }

    .sidebar .profile {
        margin-bottom: 50px;
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

    .top_navbar .back-icon,
    .top_navbar .hamburger a {
        font-size: 28px;
        color: #f4fbff;
        margin-right: 15px;
    }

    .top_navbar .back-icon:hover,
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

    /* Form Styles */
    .form-container {
        background: white;
        padding: 20px;
        max-width: 500px;
        margin: 50px auto;
        border-radius: 10px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .form-container img.account-image {
        display: block;
        width: 100px;
        height: 100px;
        border-radius: 50%;
        margin: 0 auto 20px;
    }

    .form-container h2 {
        text-align: center;
        margin-bottom: 20px;
        color: #333;
    }

    .form-group {
        margin-bottom: 15px;
    }

    .form-group label {
        display: block;
        margin-bottom: 5px;
        color: #333;
        font-weight: bold;
    }

    .form-group input {
        width: calc(100% - 20px);
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
        background: #f9f9f9;
    }

    .form-group input[readonly] {
        background: #e9e9e9;
        cursor: not-allowed;
    }

   
</style>

<body>
    <div class="wrapper">
        <div class="sidebar">
            <div class="profile">
                <img src="../assets/img/4logo.png" alt="">
                <h3>Daladagama Clinic</h3>
                <p>User Profile</p>
            </div>
            <ul>
                <li><a href="" class="active"><i class="fas fa-home icon"></i> Home</a></li>
                <li><a href=""><i class="fas fa-user icon"></i> My Account</a></li>
                <li><a href="/mychild"><i class="fas fa-baby icon"></i> Baby Details</a></li>
                <li><a href="/vacc"><i class="fas fa-syringe icon"></i> Vaccine Details</a></li>
                <li><a href="/chart"><i class="fas fa-chart-line icon"></i> Growth Chart</a></li>
                <li><a href="/"><i class="fas fa-sign-out-alt icon"></i> LogOut</a></li>
            </ul>
        </div>


        <div class="section">
            <div class="top_navbar">
               
                <a href="/user" class="back-icon"><i class="fas fa-arrow-left"></i></a>
                <a href="" class="hamburger"><i class="fas fa-bars"></i></a>
                <form class="form-inline my-2 my-lg-0">
                <h4>WELCOME YOUR CLINIC</h4>
                </form>
            </div>
            <div class="content">
                <!-- content here -->
                <div id="babyProfileForm" class="form-container">
                    <img src="../assets/img/my1.jpg" alt="Baby Profile" class="account-image">
                    <h2>Baby Vaccine Details</h2>
                    <form>
                        <div class="form-group">
                            <label for="babyName">Vaccine Name</label>
                            <input type="text" id="v_name" name="v_name" value="Poliyo" readonly>
                        </div>
                        <div class="form-group">
                            <label for="bornPlace">Vaccine ID</label>
                            <input type="text" id="v_id" name="v_id" value="E20402" readonly>
                        </div>
                        <div class="form-group">
                            <label for="babyAge">Vaccine date</label>
                            <input type="date" id="vac_date" name="vac_date" value="2024/05/04" readonly>
                        </div>
                        <div class="form-group">
                            <label for="gender">Baby Name</label>
                            <input type="text" id="b_name" name="b_name" value="Female" readonly>
                        </div>
                        <div class="form-group">
                            <label for="bornWeight">Born Weight</label>
                            <input type="text" id="bornWeight" name="bornWeight" value="3.2 kg" readonly>
                        </div>

                    </form>
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