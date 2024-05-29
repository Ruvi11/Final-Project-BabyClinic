@extends('Layout')

@section('content')

<div class="container">

    <h3 align="center" class="mt-5">Vaccine Management</h3>

    <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-12">

            <div class="form-area">
                <form method="POST" action="{{ route('vaccine.store') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label>Vaccine Name</label>
                            <input type="text" class="form-control" name="v_name">
                        </div>
                        <div class="col-md-6">
                            <label>Vaccine ID</label>
                            <input type="text" class="form-control" name="v_id">
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Vac_date</label>
                            <input type="date" class="form-control" name="vac_date">

                        </div>
                        <div class="col-md-6">
                            <label>Baby Name</label>
                            <input type="text" class="form-control" name="b_name">

                        </div>


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
                        <th scope="col">#</th>
                        <th scope="col">Vaccine Name</th>
                        <th scope="col">Vaccine ID</th>
                        <th scope="col">Vac_date</th>
                        <th scope="col">Baby Name</th>

                    </tr>
                </thead>
                <tbody>

                    @foreach ( $vaccines as $key => $vaccine )

                    <tr>
                        <td scope="col">{{ ++$key }}</td>
                        <td scope="col">{{ $vaccine->v_name }}</td>
                        <td scope="col">{{ $vaccine->v_id }}</td>
                        <td scope="col">{{ $vaccine->vac_date }}</td>
                        <td scope="col">{{ $vaccine->b_name }}</td>

                        <td scope="col">

                            <a href="{{  route('vaccine.edit', $vaccine->id) }}">
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