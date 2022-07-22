@extends('layouts.app')

@section('content')
<header id="register-header" class="header-image text-white d-none d-md-block">
    <div class="header-overlay">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="display-1">Join our Community</h1>
                    <p>Join one of the best community blogs in Indonesia</p>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="container my-5">
    <div class="row">
        <div class="col-md-8">
            <h1>{{ __('Register Form') }}</h1>
            <hr>
            <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                <div class="text-md-end">
                    @include('layouts.form',['buttonTitle' => 'Register'])
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
