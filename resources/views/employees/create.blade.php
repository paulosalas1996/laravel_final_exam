@extends('employees.layout')
@section('content')

<div class="card">
  <div class="card-header bg-secondary text-white mb-3"> <i class="fa fa-plus" aria-hidden="true"></i> Add New Employee</div>
    <div class="card-body">
      
      <form action="{{ url('employee') }}" method="post">
        {!! csrf_field() !!}

        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>

        <label>Address</label></br>
        <input type="text" name="address" id="address" class="form-control"></br>

        <label>Mobile</label></br>
        <input type="text" name="mobile" id="mobile" class="form-control"></br>

        <label>Age</label></br>
        <input type="text" name="age" id="age" class="form-control"></br>

        <label>Position</label></br>
        <input type="text" name="position" id="position" class="form-control"></br>

        <input type="submit" value="Save" class="btn btn-success">
         <a href="{{ url('/employee') }}" class="btn btn-secondary">Cancel</a>
         
    </form>
  
  </div>
</div>
@stop