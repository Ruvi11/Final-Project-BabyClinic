<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Task</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #CBE4F9;
        }

        .container {
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            width: 450px;
            padding: 20px;
            background-color: white;
            margin: 50px auto;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2 class="mb-4">Create Clinics</h2>
        <form action="{{route('store-clinic')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="Name">Midwife Name</label>
                <input type="text" id="Name" name="Name" class="form-control {{ $errors->has('Name') ? 'is-invalid' : '' }}">
                @if ($errors->has('Name'))
                <span class="text-danger">{{ $errors->first('Name') }}</span>
                @endif
            </div>

            <div class="form-group">
                <label for="Name">Clinic Name</label>
                <input type="text" id="Name" name="Name" class="form-control {{ $errors->has('Name') ? 'is-invalid' : '' }}">
                @if ($errors->has('Name'))
                <span class="text-danger">{{ $errors->first('Name') }}</span>
                @endif
            </div>

            <div class="form-group">
                <label for="Email">Email</label>
                <input type="email" id="Email" name="Email" class="form-control {{ $errors->has('Email') ? 'is-invalid' : '' }}">
                @if ($errors->has('Email'))
                <span class="text-danger">{{ $errors->first('Email') }}</span>
                @endif
            </div>

            <div class="form-group">
                <label for="Password">Password</label>
                <input type="password" id="Password" name="Password" class="form-control {{ $errors->has('Password') ? 'is-invalid' : '' }}">
                @if ($errors->has('Password'))
                <span class="text-danger">{{ $errors->first('Password') }}</span>
                @endif
            </div>

            <div class="form-group">
                <label for="Password_confirmation">Confirm Password</label>
                <input type="password" id="Password_confirmation" name="Password_confirmation" class="form-control {{ $errors->has('Password_confirmation') ? 'is-invalid' : '' }}">
                @if ($errors->has('Password_confirmation'))
                <span class="text-danger">{{ $errors->first('Password_confirmation') }}</span>
                @endif
            </div>


            <div class="form-group">
                <label for="Contact">Contact</label>
                <input type="text" id="Contact" name="Contact" class="form-control {{ $errors->has('Contact') ? 'is-invalid' : '' }}">
                @if ($errors->has('Contact'))
                <span class="text-danger">{{ $errors->first('Contact') }}</span>
                @endif
            </div>



            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>