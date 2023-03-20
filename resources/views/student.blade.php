@extends('layouts.main')
@section('content')
    <div class="container-fluid mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <h2>Students</h2>
            </div>
            <div class="col-lg-12 margin-tb">
                <a class="btn btn-primary" href="{{ route('students.create') }}">Add Student</a>
            </div>
        </div>
    
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <div class="card mt-1">
            <div class="card-header">
                <b>Student List</b>
            </div>
            <div class="card-body">
                <input type="text" id="myInput" onkeyup="mySearchFunction2()" placeholder="Search name.." title="Type in a name" class="w-100">
                <table class="table table-bordered table-striped table-hover mt-1" id="myTable">
                    <tr>
                        <th class="text-center" width="5%">Id</th>
                        <th class="text-center">Id No.</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Class</th>
                        <th class="text-center" width="150px">Action</th>
                    </tr>

                    @foreach ($students as $student)
                        <tr>
                            <td>{{ $student->id }}</td>
                            <td>{{ $student->id_no }}</td>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->class }}</td>
                            <td>
                                <form action="{{ route('students.destroy',$student->id) }}" method="Post">
                                    <div class="d-flex flex-row justify-content-around">
                                        <a class="btn btn-primary" href="{{ route('students.edit',$student->id) }}">Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </div>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection