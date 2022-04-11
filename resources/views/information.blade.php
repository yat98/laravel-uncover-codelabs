@extends('layouts.master')
@section('title','Faculty Information')

@section('content')
<div class="container text-center mt-3 p-4 bg-white">
    <h1>Faculty {{$data[0]}}, Department {{$data[1]}}</h1>
</div>
@endsection