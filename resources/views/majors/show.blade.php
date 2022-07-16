@extends('layouts.app')

@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <div class="pt-4 d-flex justify-content-between align-items-center">
                    <h1 class="h2">Information Major {{$major->major_name}}</h1>
                    <div>
                        <a href="{{route('majors.edit',$major)}}" class="btn btn-primary">Edit</a>
                        <form action="{{route('majors.destroy',$major)}}" method="POST" class="d-inline-block">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger ml-3">Delete</button>
                        </form>
                    </div>
                </div>
                <hr>
                @if(session()->has('message'))
                    <div class="alert alert-success" role="alert">
                        {{ session()->get('message')}}
                    </div>
                @endif
                <ul>
                    <li>Major Name: {{$major->major_name}} </li>
                    <li>Dean Name: {{$major->dean_name}} </li>
                    <li>Total Student: {{$major->total_student}} </li>
                </ul>
            </div>
        </div>
    </div>
@endsection