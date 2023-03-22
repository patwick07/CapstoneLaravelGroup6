@extends('layouts.main')
@section('content')
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left mb-2">
                    <h2>Add Class Per Subject</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="/class_subject">Back</a>
                </div>
            </div>
        </div>
        @if(session('status'))
            <div class="alert alert-success mb-1 mt-1">
                {{ session('status') }}
            </div>
        @endif
        <form action="{{ route('class_subject.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Class:</strong>
                        <br>
                        <select name="class_id" id="class_id" class="w-50">
                            <option value=""></option>
                            @foreach ($classes as $key=>$class)
                                <option value="{{ $class->id }}">{{ $class->class }}</option>
                            @endforeach  
                        </select>
                        @error('class_id')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Subject:</strong>
                        <br>
                        <select name="subject_id" id="subject_id" class="w-50">
                            <option value=""></option>
                            @foreach ($subjects as $key=>$subject)
                                <option value="{{ $subject->id }}">{{ $subject->subject }}</option>
                            @endforeach  
                        </select>
                        @error('class_id')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Faculty:</strong>
                        <br>
                        <select name="faculty_id" id="faculty_id" class="w-50">
                            <option value=""></option>
                            @foreach ($faculties as $key=>$faculty)
                                <option value="{{ $faculty->id }}">{{ $faculty->name }}</option>
                            @endforeach  
                        </select>
                        @error('class_id')
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