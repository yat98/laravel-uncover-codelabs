@extends('layouts.app')

@section('content')
    <section id="member-list" class="py-5 bg-light text-center">
      <div class="container">
        <div class="row">
          <div class="col text-center" >
            <h1>Member List</h1>
            <hr class="w-25 mx-auto">
            <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing
              elit. Dignissimos, vitae!</p>
    
              {{-- Untuk flash message --}}
              @if(session()->has('message'))
                @if(session()->get('message')== 'update')
                <div class="alert alert-success alert-dismissible w-50 mx-auto
                           fade show">
                  Data <b>{{session()->get('name')}}</b> update success
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                @if(session()->get('message')== 'delete')
                <div class="alert alert-danger alert-dismissible w-50 mx-auto
                           fade show">
                  Data <b>{{session()->get('name')}}</b> deleted
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
              @endif

          </div>
        </div>
    
        {{-- Proses looping untuk menampilkan semua user --}}
        <div class="row">
          @forelse ($users as $user)
            <div class="col-12 col-md-4 mb-3">
                <div class="card">
                    <img class="card-img-top"
                         src="{{ asset('img/gambar'.$user->background_picture.'.jpg')}}">
                    <div class="card-body">
                      <img src="{{ asset('storage/uploads/'.$user->profile_picture)}}"
                           class="rounded-circle img-thumbnail">
                      <h5 class="card-title">{{$user->name}}</h5>
                      <p class="card-text">"{{$user->bio  ?? '. . .'}}"</p>
                      <ul class="fa-ul text-start">
                        <li class="mb-2">
                          <span class="fa-li"><i class="far fa-clock"></i></span>
                          Join in {{ date('F Y', strtotime($user->created_at)) }}
                        </li>
                        <li class="mb-2">
                          <span class="fa-li"><i class="fas fa-briefcase"></i></span>
                          {{$user->job ?? '. . .'}}
                        </li>
                        <li class="mb-2">
                          <span class="fa-li"><i class="fas fa-home"></i></span>
                          {{$user->city  ?? '. . .'}}
                        </li>
                        <li class="mb-2">
                          <span class="fa-li"><i class="fas fa-birthday-cake"></i></span>
                          {{ date_diff(date_create($user->birthdate ),
                             date_create('now'))->y }} years
                        </li>
                        <li class="mb-2">
                          <span class="fa-li"><i class="fas fa-envelope"></i></span>
                          {{$user->email}}
                        </li>
                      </ul>
                      {{-- Tombol edit & hapus hanya untuk user sendiri atau admin --}}
                      {{-- Ini menggunakan laravel policy --}}
                      @can('update', $user)
                      <div class="btn-action">
                        <a href="{{ url('/users/'.$user->id.'/edit')}}"
                           class="btn btn-primary d-inline-block">Edit</a>
                        <button class="btn btn-danger btn-hapus" data-id="{{$user->id}}"
                          data-toggle="modal" data-target="#DeleteModal">Delete</button>
                      </div>
                      @endcan
                    </div>
                  </div>
            </div>
          @empty
            <p>Empty data...</p>
          @endforelse
        </div>
      </div>
    </section>
    <div id="DeleteModal" class="modal fade" role="dialog">
      <div class="modal-dialog ">
      <!-- Modal content-->
        <form action="" id="deleteForm" method="post">
        @csrf
        @method('DELETE')
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title text-center">Confirm</h4>
            <button type="button" class="close" data-dismiss="modal">
            &times;</button>
          </div>
          <div class="modal-body">
            <p class="text-center">Are you sure to delete this user?</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-success" data-dismiss="modal">
                Cancel</button>
            <button type="submit" class="btn btn-danger" data-dismiss="modal">
                Yes, Delete</button>
          </div>
        </div>
        </form>
      </div>
    </div>
@endsection
