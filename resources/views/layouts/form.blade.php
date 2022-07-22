@csrf
<div class="input-group row mb-3">
  <label for="email" class="col-md-3 col-form-label">
    Email * </label>
  <div class="col-md-6 mx-auto">
    <input id="email" type="email"
    class="form-control @error('email') is-invalid @enderror"
    name="email" value="{{ old('email') ?? $user->email ?? '' }}"
    autocomplete="email" autofocus>
    @error('email')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
    @enderror
  </div>
</div>

{{-- Jika form ini untuk halaman register, maka tampilkan inputan password --}}
@if ($buttonTitle == 'Register')

<div class="input-group row mb-3">
  <label for="password" class="col-md-3 col-form-label text-md-end">
  Password *</label>
  <div class="col-md-6 mx-auto">
    <input id="password" type="password"
    class="form-control @error('password') is-invalid @enderror"
    name="password" autocomplete="new-password">
    @error('password')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
    @enderror
  </div>
</div>

<div class="input-group row mb-3">
  <label for="password-confirm" class="col-md-3 col-form-label text-md-end">
  Password Confirm *</label>
  <div class="col-md-6 mx-auto">
    <input id="password-confirm" type="password" class="form-control"
    name="password_confirmation" autocomplete="new-password">
  </div>
</div>

@endif

<div class="input-group row mb-3">
  <label for="nama" class="col-md-3 col-form-label text-md-end">
  Name *</label>
  <div class="col-md-6 mx-auto">
    <input id="name" type="text" autocomplete="name"
    class="form-control @error('name') is-invalid @enderror"
    name="name" value="{{ old('name') ?? $user->name ?? '' }}">
    @error('name')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
    @enderror
  </div>
</div>

<div class="input-group row mb-3">
  <label for="birthdate" class="col-md-3 col-form-label text-md-end">
  Birthdate *</label>
  
  <div class="col-md-6 row mx-auto px-0">
    <div class="col-3">
      <input type="number" name="tgl" id="tgl"
      class="form-control d-inline
      @error('birthdate') is-invalid @enderror"
      placeholder="dd" value="{{ old('tgl') ?? $user->tgl ?? '' }}">
    </div>
    @php
      // Siapkan nama-nama bulan dalam bahasa Indonesia
      $namaBulan = ["Januari","Februari","Maret","April",
                    "Mei","Juni","Juli","Agustus","September",
                    "Oktober","November","Desember"];
    @endphp
    <div class="col-5">
      <select class="form-select col d-inline
      @error('birthdate') is-invalid @enderror"
      style="vertical-align: baseline;" name="bln" id="bln">
        @for ($i = 0; $i < 12; $i++)
          @if ($i+1 == (old('bln') ?? $user->bln ?? ''))
            <option value="{{ $i+1 }}" selected >{{ $namaBulan[$i] }}</option>
          @else
            <option value="{{ $i+1 }}">{{ $namaBulan[$i] }}</option>
          @endif
        @endfor
      </select>
    </div>
   <div class="col-4">
    <input type="number" id="thn" class="form-control col-md-3 d-inline
    @error('birthdate') is-invalid @enderror"
    name="thn" placeholder="yyyy" value="{{ old('thn') ?? $user->thn ?? ''}}">
    @error('birthdate')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
   </div>
  </div>
</div>

<div class="input-group row mb-3">
  <label for="job" class="col-md-3 col-form-label text-md-right">
  Job </label>
  <div class="col-md-6 mx-auto">
    <input id="job" type="text"
    class="form-control @error('job') is-invalid @enderror"
    name="job" value="{{ old('job') ?? $user->job ?? '' }}">
    @error('job')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
    @enderror
  </div>
</div>

<div class="input-group row">
  <label for="city" class="col-md-3 col-form-label text-md-right">City </label>
  <div class="col-md-6 mx-auto">
    <input id="city" type="text"
    class="form-control @error('city') is-invalid @enderror"
    name="city" value="{{ old('city') ?? $user->city ?? ''}}">
    @error('city')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
    @enderror
  </div>
</div>

<div class="input-group row">
  <label for="bio" class="col-md-3 col-form-label text-md-right">
  Bio </label>
  <div class="col-md-6 mx-auto">
    <textarea class="form-control" id="bio" name="bio"
    placeholder = "Bio singkat anda...">{{
      old('bio') ?? $user->bio ?? ''
    }}</textarea>
    @error('bio')
    <span class="invalid-feedback" role="alert">
      <strong>{{ $message }}</strong>
    </span>
  @enderror
  </div>
</div>

<div class="input-group row mb-3">
  <label for="profile_picture" class="col-md-3 col-form-label text-md-right">
  Profil Picture</label>
  <div class="col-md-6 mx-auto">
    <div class="custom-file">
      <input type="file" id="profile_picture" name="profile_picture" accept="image/*"
      class="custom-file-input form-control @error('profile_picture') is-invalid @enderror" value="{{ $user->profile_picture ?? ''}}">
      @error('profile_picture')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
      @enderror
    </div>
  </div>
</div>

<div class="input-group row mb-3">
  <label for="background_picture" class="col-md-3  text-md-right">
  Background Picture</label>
  <div class="col-md-6 row mx-auto">
    <select name="background_picture" class="custom-select form-control 
    @error('background_picture') is-invalid @enderror" id="background_picture" >
      @for ($i = 1; $i <= 12; $i++)
        @if($i == (old('background_picture') ?? $user->background_picture ?? ''))
          <option value="{{ $i }}" selected >{{ 'Picture '.$i }}</option>
        @else
          <option value="{{ $i }}">{{ 'Picture '.$i }}</option>
        @endif
      @endfor
    </select>
    @error('background_picture')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
    @enderror
    <div class="my-2 text-start px-0">
    @for ($i = 1; $i <= 12; $i++)
      <div class="pilihan-background-profil">
        <div class='overlay'>{{ $i }}</div>
        <img class="img-thumbnail" src="{{asset('img/gambar'.$i.'.jpg')}}"
        width="100px">
      </div>
    @endfor
    </div>
  </div>
</div>

<div class="input-group row mb-3">
  <div class="col-md-3"></div>
  <div class="col-md-6 mx-auto  text-start">
    <button type="submit" class="btn btn-primary">{{$buttonTitle}}</button>
  </div>
</div>