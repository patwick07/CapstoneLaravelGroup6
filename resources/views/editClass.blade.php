@extends('layouts.main')
@section('content')
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Edit Class</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="/classes" enctype="multipart/form-data">Back</a>
                </div>
            </div>
        </div>
        @if(session('status'))
            <div class="alert alert-success mb-1 mt-1">
                {{ session('status') }}
            </div>
        @endif
        <form action="{{ route('classes.update',$class->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Course:</strong>
                        <br>
                        <select name="course_id" id="course_id" class="w-50">
                            <option value=""></option>
                            @foreach ($courses as $key=>$val)
                                <option value="{{ $val->id }}" {{ ($val->id == $class->course_id) ? "selected" : "" }}>{{ $val->course }}</option>
                            @endforeach  
                        </select>
                        @error('course')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Level:</strong>
                        <input type="text" name="level" value="{{ $class->level }}" class="form-control" placeholder="Enter Level">
                        @error('level')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Section:</strong>
                        <input type="text" name="section" value="{{ $class->section }}" class="form-control" placeholder="Enter Section">
                        @error('section')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mt-1">
                    <button type="submit" class="btn btn-primary ml-3">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection