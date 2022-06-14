<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <title>{{ __('form.title') }}</title>
</head>
<body>
    <div class="container pt-4 bg-white">
        <div class="row">
            <div class="col-md-8 col-xl-6">
                <h1>{{ __('form.title') }}</h1>
                <hr>
            <form action="{{ url('/process-form') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nim">{{ __('form.input.nim') }}</label>
                        <input type="text" class="form-control @error('nim') is-invalid @enderror" id="nim" name="nim" value="{{ old('nim') }}">
                        @error('nim')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="name">{{ __('form.input.name') }}</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">{{ __('form.input.email') }}</label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>{{ __('form.input.gender') }}</label>
                        <div class="form-group">
                            <div class="form-check form-check-inline @error('gender') is-invalid @enderror my-0">
                                <input class="form-check-input" type="radio" name="gender"
                                id="male" value="M" @if(old('gender') == 'M') checked @endif>
                                <label class="form-check-label" for="male">{{ __('form.input.gender_value.male') }}</label>
                            </div>
                            <div class="form-check form-check-inline my-0">
                                <input class="form-check-input" type="radio" name="gender"
                                id="female" value="F" @if(old('gender') == 'F') checked @endif>
                                <label class="form-check-label" for="female">{{ __('form.input.gender_value.female') }}</label>
                            </div>
                            @error('gender')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="major">{{ __('form.input.major') }}</label>
                        <select class="form-control @error('major') is-invalid @enderror" name="major" id="major">
                            <option value="Teknik Informatika" {{ old('major') == 'Teknik Informatika' ? 'selected':'' }}>Teknik Informatika</option>
                            <option value="Sistem Informasi" {{ old('major') == 'Sistem Informasi' ? 'selected':'' }}>Sistem Informasi</option>
                            <option value="Ilmu Komputer" {{ old('major') == 'Ilmu Komputer' ? 'selected':'' }}>Ilmu Komputer</option>
                            <option value="Teknik Komputer" {{ old('major') == 'Teknik Komputer' ? 'selected':'' }}>Teknik Komputer</option>
                            <option value="Teknik Telekomunikasi" {{ old('major') == 'Teknik Telekomunikasi' ? 'selected':'' }}>Teknik Telekomunikasi</option>
                        </select>
                        @error('major')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="address @error('address') is-invalid @enderror">{{ __('form.input.address') }}</label>
                        <textarea class="form-control" id="address" rows="3"
                        name="address">{{ old('address') }}</textarea>
                        @error('address')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary mb-2">{{ __('form.input.button') }}</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>