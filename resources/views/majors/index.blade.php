@extends('layouts.app')

@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <div class="py-4 d-flex justify-content-between align-items-center">
                    <h1 class="h2">List Major</h1>
                    @can('create','App\Models\Major')
                        <a href="{{route('majors.create')}}" class="btn btn-primary">
                            Add Major
                        </a>
                    @endcan
                </div>
                <hr>
                @if(session()->has('message'))
                    <div class="alert alert-success" role="alert">
                        {{ session()->get('message')}}
                    </div>
                @endif
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Major Name</th>
                            <th>Dean Name</th>
                            <th>Total Student</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($majors as $major)
                            <tr>
                                <th>{{$loop->iteration}}</th>
                                <td>
                                <a href="{{ route('majors.show',$major) }}">
                                    {{$major->major_name}}
                                </a>
                                </td>
                                <td>{{$major->dean_name}}</td>
                                <td>{{$major->total_student}}</td>
                            </tr>
                        @empty
                            <td colspan="6" class="text-center">Empty data...<td>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection