<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student List</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body>
    <div class="container text-center mt-3 pt-3 bg-white">
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">
            {{ $name }}
        </h1>
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">
            {{ $grade }}
        </h1>
        <br>
        @if ($grade > 0 && $grade < 50)
            <div class="alert alert-danger d-inline-block">
                Maaf, anda tidak lulus
            </div>  
        @elseif ($grade > 50 && $grade < 100)
            <div class="alert alert-success d-inline-block">
                Selamat, anda lulus
            </div>
        @else
            <div class="alert alert-secondary d-inline-block">
                Nilai tidak valid
            </div>
        @endif
    </div>
    <div class="container text-center mt-3 pt-3 bg-white">
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">
            {{ $nameUnscape }}
        </h1>
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">
            {{ $grade }}
        </h1>
    </div>
    <div class="container text-center mt-3 pt-3 bg-white">
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">
            {!! $nameUnscape !!}
        </h1>
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">
            {{ $grade }}
        </h1>
    </div>
    <div class="container text-center mt-3 pt-3 bg-white">        
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">
            {{ date(now()) }}
        </h1>
    </div>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/popper.min.js"></script>
</body>
</html>