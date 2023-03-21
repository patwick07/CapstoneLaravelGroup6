@extends('layouts.main')
@section('content')
    <div class="container courses mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <h2>Courses</h2>
            </div>
            <div class="col-lg-12 margin-tb">
                <a class="btn btn-primary" href="{{ route('courses.create') }}">Add Course</a>
            </div>
        </div>
    
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <div class="card mt-1">
            <div class="card-header">
                <b>Course List</b>
            </div>
            <div class="card-body">
                <input type="text" id="myInput" onkeyup="mySearchFunction()" placeholder="Search course.." title="Type in a name" class="w-100">
                <table class="table table-bordered table-striped table-hover mt-1" id="myTable">
                    <tr>
                        <th class="text-center" width="5%">Id</th>
                        <th class="text-center">Course</th>
                        <th class="text-center" width="150px">Action</th>
                    </tr>
                    {{-- @dd($courses); --}}
                    @foreach ($courses as $course)
                        <tr>
                            <td>{{ $course->id }}</td>
                            <td>
                                <p><b>{{ $course->course }}</b></p>
                                <small><i>{{ $course->description }}</i></small>
                            </td>
                            <td>
                                <form action="{{ route('courses.destroy',$course->id) }}" method="Post">
                                    <div class="d-flex flex-row justify-content-around">
                                        <a class="btn btn-primary" href="{{ route('courses.edit',$course->id) }}">Edit</a>
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
        {{-- {!! $courses->links() !!} --}}
    </div>
@endsection