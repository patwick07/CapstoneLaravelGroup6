@extends('layouts.main')
@section('content')
    <div class="container-fluid mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <h2>Subjects</h2>
            </div>
            <div class="col-lg-12 margin-tb">
                <a class="btn btn-outline-primary" href="{{ route('subjects.create') }}">Add Subject</a>
            </div>
        </div>
    
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <div class="card mt-1">
            <div class="card-header">
                <b>Subject List</b>
            </div>
            <div class="card-body">
                <input type="text" id="myInput" onkeyup="mySearchFunction()" placeholder="Search subject.." title="Type in a name" class="w-50">
                <table class="table table-bordered table-striped table-hover mt-1" id="myTable">
                    <tr>
                        <th class="text-center" width="5%">Id</th>
                        <th class="text-center">Subject</th>
                        <th class="text-center" width="150px">Action</th>
                    </tr>
                    
                    @foreach ($subjects as $subject)
                        <tr>
                            <td>{{ $subject->id }}</td>
                            <td>
                                <p><b>{{ $subject->subject }}</b></p>
                                <small><i>{{ $subject->description }}</i></small>
                            </td>
                            <td>
                                <form action="{{ route('subjects.destroy',$subject->id) }}" method="Post">
                                    <div class="d-flex flex-row justify-content-around">
                                        <a class="btn btn-outline-success" href="{{ route('subjects.edit',$subject->id) }}">Edit</a>
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
        {{-- {!! $subjects->links() !!} --}}
    </div>
@endsection