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
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="priorityDropdown" role="button" data-toggle="dropdown" style="color:white;margin-right:50px;">
                        Clinic
                    </a>
                    <div class="dropdown-menu" aria-labelledby="priorityDropdown">
                        <a class="dropdown-item" href="{{ url('create-clinics') }}">Create Clinic</a>
                        <a class="dropdown-item" href="{{ route('tasks.index') }}">Manage Clinics</a>
                    </div>
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
                        <th>Name</th>
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
                        <td>{{ $task->contact }}</td>
                        <td>{{ $task->role }}</td>
                        <td>{{ $task->created_at }}</td>
                        <td>
                            <a class="btn btn-primary btn-sm" href="{{ route('tasks.edit', $task->id) }}" style="width:80px;">Edit</a>
                        </td>
                        <td>
                            <form action="{{ route('tasks.destroy', $task->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
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