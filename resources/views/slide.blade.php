@extends('Layout')

@section('content')

<!DOCTYPE html>
<html>

<head>
    <title>Create Post</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1>Create Post</h1>
        <form method="POST" action="{{ route('posts.store') }}">
            @csrf
            <table class="table table-bordered">
                <tr>
                    <th>
                        <label for="title">Title:</label>
                    </th>
                    <td>
                        <input type="text" id="title" name="title" class="form-control" value="{{ old('title') }}">
                        @error('title')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <th>
                        <label for="body">Body:</label>
                    </th>
                    <td>
                        <textarea id="body" name="body" class="form-control">{{ old('body') }}</textarea>
                        @error('body')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="text-right">
                        <button type="submit" class="btn btn-primary">Create</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
@endsection


@push('css')
<style>
    .form-area {
        padding: 20px;
        margin-top: 20px;
        background-color: #b3e5fc;
    }

    .bi-trash-fill {
        color: red;
        font-size: 18px;
    }

    .bi-pencil {
        color: green;
        font-size: 18px;
        margin-left: 20px;
    }
</style>
@endpush