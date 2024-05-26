@extends('Layout')

@section('content')

<div class="container">

    <h3 align="center" class="mt-5">Baby Register</h3>

    <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-19">

            <div class="form-area">
                <form method="POST" action="{{ route('baby.store') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label>Baby Name</label>
                            <input type="text" class="form-control" name="b_name">
                        </div>
                        <div class="col-md-6">
                            <label>parent Name</label>
                            <select name="parent_id" class="form-control">
                                <option value="">Select the Parent</option>
                                @foreach($employees as $employee)
                                <option value="{{$employee->id}}">{{$employee->emp_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label>Born Place</label>
                            <input type="text" class="form-control" name="address">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Baby' Age</label>
                            <input type="text" class="form-control" name="b_age">
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-md-3">
                            <label>Gender</label>
                            <input type="text" class="form-control" name="gender">

                        </div>

                        <div class="col-md-3">
                            <label>Born Weight</label>
                            <input type="text" class="form-control" name="born_weight">

                        </div>
                        <div class="col-md-3">
                            <label>BirthDday</label>
                            <input type="date" class="form-control" name="bdy">

                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-md-12 mt-3">
                            <input type="submit" class="btn btn-primary" value="Register">
                        </div>

                    </div>
                </form>
            </div>

            <table class="table mt-5">
                <thead>
                    <tr>
                        <th scope="col">Baby ID</th>

                        <th scope="col">Baby Name</th>
                        <th scope="col">Mother Name</th>
                        <th scope="col">Born Place</th>
                        <th scope="col">Baby' Age</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Born Weight</th>
                        <th scope="col">BirthDday</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ( $babies as $key => $baby )

                    <tr>
                        <td scope="col">{{ ++$key }}</td>

                        <td scope="col">{{ $baby->b_name }}</td>
                        <td scope="col">{{$baby->emp_name}}</td>
                        <td scope="col">{{ $baby->address }}</td>
                        <td scope="col">{{ $baby->b_age}}</td>
                        <td scope="col">{{ $baby->gender }}</td>
                        <td scope="col">{{ $baby->born_weight }}</td>
                        <td scope="col">{{ $baby->bdy }}</td>
                        <td scope="col">

                            <a href="{{  route('baby.edit', $baby->baby_id) }}">
                                <button class="btn btn-primary btn-sm">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                                </button>
                            </a>



                            <form action="{{ route('baby.destroy', $baby->baby_id) }}" method="POST" style="display:inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>

                    </tr>

                    @endforeach




                </tbody>
            </table>
        </div>
    </div>
</div>

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