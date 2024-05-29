@extends('Layout')

@section('content')

<div class="container">

    <h3 align="center" class="mt-5">Baby Growth Management</h3>

    <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-12">

            <div class="form-area">
                <form method="POST" action="{{ route('grow.store') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label>Baby ID</label>
                            <input type="text" class="form-control" name="b_id">
                        </div>
                        <div class="col-md-6">
                            <label>Baby Name</label>
                            <input type="text" class="form-control" name="b_name">
                        </div>
                        <div class="col-md-6">
                            <label>Date</label>
                            <input type="date" class="form-control" name="date">

                        </div>

                    </div><br>
                    <div class="row">

                        <div class="col-md-6">
                            <label>Height</label>
                            <input type="text" class="form-control" name="height">
                        </div>
                        <div class="col-md-6">
                            <label>Weight</label>
                            <input type="text" class="form-control" name="Weight">
                        </div>
                        <div class="col-md-6">
                            <label>BMI</label>
                            <input type="text" class="form-control" name="BMI">
                        </div>


                        <div class="row">
                            <div class="col-md-12 mt-3">
                                <input type="submit" class="btn btn-primary" value="ADD">
                            </div>

                        </div>
                </form>
            </div>

            <table class="table mt-5">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Baby ID</th>
                        <th scope="col">Baby Name</th>
                        <th scope="col">Date</th>
                        <th scope="col">Height</th>
                        <th scope="col">Weight</th>

                    </tr>
                </thead>
                <tbody>

                    @foreach ( $growthcharts as $key => $grow )

                    <tr>
                        <td scope="col">{{ ++$key }}</td>
                        <td scope="col">{{ $grow->v_name }}</td>
                        <td scope="col">{{ $grow->date}}</td>
                        <td scope="col">{{ $grow->height }}</td>
                        <td scope="col">{{ $grow->Weight}}</td>

                        <td scope="col">

                            <a href="{{  route('grow.edit', $grow->id) }}">
                                <button class="btn btn-primary btn-sm">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                                </button>
                            </a>



                            <form action="{{ route('vaccine.destroy', $vaccine->id) }}" method="POST" style="display:inline">
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