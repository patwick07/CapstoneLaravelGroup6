@extends('layouts.main')
@section('content')
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Edit Subject</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-outline-primary" href="/subjects" enctype="multipart/form-data">Back</a>
                </div>
            </div>
        </div>
        @if(session('status'))
            <div class="alert alert-success mb-1 mt-1">
                {{ session('status') }}
            </div>
        @endif
        <form action="{{ route('subjects.update',$subject->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Subject:</strong>
                        <input type="text" name="subject" value="{{ $subject->subject }}" class="form-control" placeholder="Enter Subject">
                        @error('subject')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Description:</strong>
                        <input type="text" name="description" value="{{ $subject->description }}" class="form-control" placeholder="Enter Description">
                        @error('description')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mt-1">
                    <button type="submit" class="btn btn-outline-primary ml-3">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection