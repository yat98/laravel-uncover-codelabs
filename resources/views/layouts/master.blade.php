<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Student Information System')</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link @yield('menuStudent')"href="/student">Student</a>
                    <a class="nav-link @yield('menuLecture')" href="/lecture">Lecture</a>
                    <a class="nav-link @yield('menuGallery')" href="/gallery">Gallery</a>
                </div>
            </div>
        </div>
    </nav>
    @yield('content')
    <footer class="bg-dark py-4 text-white mt-4">
        <div class="container">
            Student Information System | Copyright © {{ date("Y") }} Duniailkom
        </div>
    </footer>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/popper.min.js"></script>
</body>
</html>