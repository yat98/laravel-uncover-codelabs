@extends('layouts.master')
@section('title', 'Student List')
@section('menuStudent', 'active')

@section('content')
    <div class="container text-center mt-3 p-4 bg-white">
        <h1>Student List</h1>
        <div class="row">
            <div class="col-sm-8 col-md-6 m-auto">
                <ol class="list-group">
                    @forelse ($students as $student)
                        <li class="list-group-item">{{ $student }}</li>
                    @empty
                        <div class="alert alert-dark d-inline-block">Tidak ada data...</div>
                    @endforelse
                </ol>
            </div>
        </div>
    </div>
@endsection