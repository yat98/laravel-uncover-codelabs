@extends('layouts.app')

@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-sm-8 col-md-6">
                <h1 class="h2 pt-4">Edit Major</h1>
                <hr>
                <form action="{{route('majors.update',$major)}}" method="POST">
                    @method('PATCH')
                    @csrf
                    <div class="form-group">
                        <label for="major_name">Major Name</label>
                        <input type="text" class="form-control @error('major_name') is-invalid @enderror" id="major_name" name="major_name" value="{{ old('major_name') ?? $major->major_name }}">
                        @error('major_name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="dean_name">Dean Name</label>
                        <input type="text" class="form-control @error('dean_name') is-invalid @enderror" id="dean_name" name="dean_name" value="{{ old('dean_name') ?? $major->dean_name }}">
                        @error('dean_name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="total_student">Total Student</label>
                        <input type="text" class="form-control @error('total_student') is-invalid @enderror" id="total_student" name="total_student" value="{{ old('total_student') ?? $major->total_student }}">
                        @error('total_student')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary my-2">Edit</button>
                </form>
            </div>
        </div>
    </div>
@endsection