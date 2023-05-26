@extends('employees.layout')
@section('content')

<div class="card">
  <div class="card-header 
  bg-secondary text-white mb-3"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit Employee</div>
  <div class="card-body">
      
      <form action="{{ url('employee/' .$employees->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")

        <input type="hidden" name="id" id="id" value="{{$employees->id}}" id="id" />

        <label>Name</label><br>
        <input type="text" name="name" id="name" value="{{$employees->name}}" class="form-control"><br>

        <label>Address</label><br>
        <input type="text" name="address" id="address" value="{{$employees->address}}" class="form-control"><br>

        <label>Mobile</label><br>
        <input type="text" name="mobile" id="mobile" value="{{$employees->mobile}}" class="form-control"><br>

        <label>Age</label><br>
        <input type="text" name="age" id="age" value="{{$employees->age}}" class="form-control"><br>

        <label>Position</label><br>
        <input type="text" name="position" id="position" value="{{$employees->position}}" class="form-control"><br> 

        <input type="submit" value="Update" class="btn btn-success">
        <a href="{{ url('/employee') }}" class="btn btn-secondary">Cancel</a>
        
      </form>
  
  </div>
</div>
@endsection
