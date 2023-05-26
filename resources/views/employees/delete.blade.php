@extends('employees.layout')
@section('content')

<div class="card">
  <div class="card-header bg-secondary text-white mb-3">Employees Information</div>
    <div class="card-body">
      <h5 class="card-title">Name: {{ $employees->name }}</h5>
      <p class="card-text">Address: {{ $employees->address }}</p>
      <p class="card-text">Mobile: {{ $employees->mobile }}</p>
      <p class="card-text">Age: {{ $employees->age }}</p>
      <p class="card-text">Position: {{ $employees->position }}</p>
      <hr>
      <button class="btn btn-primary" onclick="window.history.back();">OK</button>
    </div>
</div>
@endsection
