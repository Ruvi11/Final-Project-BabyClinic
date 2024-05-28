@extends('user/profile')

@section('content')
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
        max-width: 500px;
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




<div class="content">
    <!-- content here -->
    <div class="form-container">
        <img src="../assets/img/my1.jpg" alt="Baby Profile" class="account-image">
        <h2>Baby Profile</h2>
        <form>
            <div class="form-group">
                <label for="babyName">Baby Name</label>
                <input type="text" id="babyName" name="babyName" value="Jane Doe" readonly>
            </div>
            <div class="form-group">
                <label for="bornPlace">Born Place</label>
                <input type="text" id="bornPlace" name="bornPlace" value="General Hospital" readonly>
            </div>
            <div class="form-group">
                <label for="babyAge">Baby's Age</label>
                <input type="text" id="babyAge" name="babyAge" value="2" readonly>
            </div>
            <div class="form-group">
                <label for="gender">Gender</label>
                <input type="text" id="gender" name="gender" value="Female" readonly>
            </div>
            <div class="form-group">
                <label for="bornWeight">Born Weight</label>
                <input type="text" id="bornWeight" name="bornWeight" value="3.2 kg" readonly>
            </div>
            <div class="form-group">
                <label for="birthDate">Birthday</label>
                <input type="date" id="birthDate" name="birthDate" value="2022-01-01" readonly>
            </div>
        </form>
    </div>

    @include('library.scripts')
</div>
</div>
</div>

<script src="script.js"></script>