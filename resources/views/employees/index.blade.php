@extends('employees.layout')
@section('content')

<div class="card">
    <div class="card-header bg-secondary text-white mb-3" >
        <h4 class="mb-0">Employee's List</h4>
    </div>

    <div>
        @if(session()->has('message'))
        <div class="alert alert-success text-center" id="alert">
            {{ session()->get('message') }}
        </div>
        @endif
    </div>

    <div class="card-body">
        <a href="{{ url('/employee/create') }}" class="btn btn-success btn-sm mb-3" title="Add New Employee">
            <i class="fa fa-plus" aria-hidden="true"></i> Add Employee
        </a>

        <div class="table-responsive">
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Mobile</th>
                        <th>Age</th>
                        <th>Position</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($employees as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->address }}</td>
                        <td>{{ $item->mobile }}</td>
                        <td>{{ $item->age }}</td>
                        <td>{{ $item->position }}</td>
                        <td>
                            <a href="{{ url('/employee/' . $item->id) }}" title="View Employee" class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</a>
                            <a href="{{ url('/employee/' . $item->id . '/edit') }}" title="Edit Employee" class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>
                            <form method="POST" action="{{ url('/employee' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Employee" onclick="return confirm('Confirm delete of employee: \n\nName: {{ $item->name }} \nAddress: {{ $item->address }} \nMobile: {{ $item->mobile }} \nAge: {{ $item->age }} \nPosition: {{ $item->position }} \n\nAre you sure?')"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
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
