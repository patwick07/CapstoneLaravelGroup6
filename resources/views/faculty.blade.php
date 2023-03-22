@extends('layouts.main')
@section('content')
    <div class="container-fluid mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <h2>Faculty</h2>
            </div>
            <div class="col-lg-12 margin-tb">
                <a class="btn btn-outline-primary" href="{{ route('faculties.create') }}">Add Faculty</a>
            </div>
        </div>
    
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <div class="card mt-1">
            <div class="card-header">
                <b>Faculty List</b>
            </div>
            <div class="card-body">
                <input type="text" id="myInput" onkeyup="mySearchFunction2()" placeholder="Search name.." title="Type in a name" class="w-50">
                <table class="table table-bordered table-striped table-hover mt-1" id="myTable">
                    <tr>
                        <th class="text-center" width="5%">Id</th>
                        <th class="text-center">Id No.</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Contact</th>
                        <th class="text-center">Address</th>
                        <th class="text-center" width="150px">Action</th>
                    </tr>
                    {{-- @dd($courses); --}}
                    @foreach ($faculties as $faculty)
                        <tr>
                            <td>{{ $faculty->id }}</td>
                            <td>{{ $faculty->id_no }}</td>
                            <td>{{ $faculty->name }}</td>
                            <td>{{ $faculty->email }}</td>
                            <td>{{ $faculty->contact }}</td>
                            <td>{{ $faculty->address }}</td>
                            <td>
                                <form action="{{ route('faculties.destroy',$faculty->id) }}" method="Post">
                                    <div class="d-flex flex-row justify-content-around">
                                        <a class="btn btn-outline-success" href="{{ route('faculties.edit',$faculty->id) }}">Edit</a>
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
        {{-- {!! $courses->links() !!} --}}
    </div>
@endsection