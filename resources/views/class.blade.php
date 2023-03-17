@extends('layouts.main')
@section('content')
    <div class="container-fluid mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <h2>Classes</h2>
            </div>
            <div class="col-lg-12 margin-tb">
                <a class="btn btn-primary" href="{{ route('classes.create') }}">Add Class</a>
            </div>
        </div>
    
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <div class="card mt-1">
            <div class="card-header">
                <b>Class List</b>
            </div>
            <div class="card-body">
                <input type="text" id="myInput" onkeyup="mySearchFunction()" placeholder="Search class.." title="Type in a name" class="w-100">
                <table class="table table-bordered table-striped table-hover mt-1" id="myTable">
                    <tr>
                        <th class="text-center" width="5%">Id</th>
                        <th class="text-center">Class</th>
                        <th class="text-center" width="150px">Action</th>
                    </tr>

                    @foreach ($classes as $class)
                        <tr>
                            <td>{{ $class->id }}</td>
                            <td>
                                <p><b>{{ $class->class }}</b></p>
                            </td>
                            <td>
                                <form action="{{ route('classes.destroy',$class->id) }}" method="Post">
                                    <div class="d-flex flex-row justify-content-around">
                                        <a class="btn btn-primary" href="{{ route('classes.edit',$class->id) }}">Edit</a>
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