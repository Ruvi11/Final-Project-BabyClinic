@extends('Layout')
@section('content')


<div class="card">
  <div class="card-header">Students Page</div>
  <div class="card-body">


    <div class="card-body">
      <h5 class="card-title">Name : {{$employee->name }}</h5>
      <p class="card-text">Address : {{ $employee->address }}</p>
      <p class="card-text">Mobile : {{ $employee->phone }}</p>
    </div>

    </hr>

  </div>
</div>
@endsection