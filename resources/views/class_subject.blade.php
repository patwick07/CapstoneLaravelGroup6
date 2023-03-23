@extends('layouts.main')
@section('content')
    <div class="container-fluid mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <h2>Class Per Subject</h2>
            </div>
            <div class="col-lg-12 margin-tb">
                <a class="btn btn-outline-primary" href="{{ route('class_subject.create') }}">Add Record</a>
            </div>
        </div>
    
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <div class="card mt-1">
            <div class="card-header">
                <b>Class Per Subject List</b>
            </div>
            <div class="card-body">
                <input type="text" id="myInput" onkeyup="mySearchFunction()" placeholder="Search class.." title="Type in a name" class="w-50">
                <table class="table table-bordered table-striped table-hover mt-1" id="myTable">
                    <tr>
                        <th class="text-center" width="5%">Id</th>
                        <th class="text-center">Class</th>
                        <th class="text-center">Subject</th>
                        <th class="text-center">Faculty</th>
                        <th class="text-center" width="150px">Action</th>
                    </tr>

                    @foreach ($class_subject as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->class }}</td>
                            <td>{{ $item->subject }}</td>
                            <td>{{ $item->fname }}</td>
                            <td>
                                <form action="{{ route('class_subject.destroy',$item->id) }}" method="Post">
                                    <div class="d-flex flex-row justify-content-around">
                                        <a class="btn btn-outline-success" href="{{ route('class_subject.edit',$item->id) }}">Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger">Delete</button>
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