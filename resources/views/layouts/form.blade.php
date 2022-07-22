@csrf
<div class="input-group row mb-3">
  <label for="email" class="col-md-3 col-form-label">
    Email * </label>
  <div class="col-md-8 mx-auto text-start">
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
  <div class="col-md-8 mx-auto text-start">
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
  <div class="col-md-8 mx-auto text-start">
    <input id="password-confirm" type="password" class="form-control"
    name="password_confirmation" autocomplete="new-password">
  </div>
</div>

@endif

<div class="input-group row mb-3">
  <label for="nama" class="col-md-3 col-form-label text-md-end">
  Name *</label>
  <div class="col-md-8 mx-auto text-start">
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
  
  <div class="col-md-8 row mx-auto px-0 text-start">
    <div class="col-3">
      <input type="number" name="date" id="date"
      class="form-control d-inline
      @error('birthdate') is-invalid @enderror"
      placeholder="dd" value="{{ old('date') ?? $user->date ?? '' }}">
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
      style="vertical-align: baseline;" name="month" id="month">
        @for ($i = 0; $i < 12; $i++)
          @if ($i+1 == (old('month') ?? $user->month ?? ''))
            <option value="{{ $i+1 }}" selected >{{ $namaBulan[$i] }}</option>
          @else
            <option value="{{ $i+1 }}">{{ $namaBulan[$i] }}</option>
          @endif
        @endfor
      </select>
    </div>
    <div class="col-4">
      <input type="number" id="year" class="form-control col-md-3 d-inline
      @error('birthdate') is-invalid @enderror"
      name="year" placeholder="yyyy" value="{{ old('year') ?? $user->year ?? ''}}">
    </div>
    <div class="col-12">
      <input type="hidden" class="@error('birthdate') is-invalid @enderror" disabled>
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
  <div class="col-md-8 mx-auto text-start">
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

<div class="input-group row mb-3">
  <label for="city" class="col-md-3 col-form-label text-md-right">City </label>
  <div class="col-md-8 mx-auto text-start">
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


<div class="input-group row mb-3">
  <label for="bio" class="col-md-3 col-form-label text-md-right">
  Bio </label>
  <div class="col-md-8 mx-auto text-start">
    <textarea class="form-control @error('bio') is-invalid @enderror" id="bio" name="bio"
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
  <div class="col-md-8 mx-auto text-start">
    <div class="custom-file">
      <input type="file" id="profile_picture" name="profile_picture" accept="image/*"
      class="custom-file-input form-control @error('profile_picture') is-invalid @enderror" value="{{ $user->profile_picture ?? ''}}">
      <label class="custom-file-label col-md-12" for="gambar_profil" onchange="$('#gambar_profil').val($(this).val());">
        {{ $user->gambar_profil ?? 'Pilih gambar...'}}
      </label>
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
  <div class="col-md-8 row mx-auto text-start">
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
      <span class="invalid-feedback px-0" role="alert">
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
  <div class="col-md-8 mx-auto  text-start">
    <button type="submit" class="btn btn-primary">{{$buttonTitle}}</button>
  </div>
</div>