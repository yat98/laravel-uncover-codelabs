<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gallery</title>
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
                    <a class="nav-link"  href="/student">Student</a>
                    <a class="nav-link" href="/lecture">Lecture</a>
                    <a class="nav-link active" aria-current="page" href="/gallery">Gallery</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="container text-center mt-3 p-4 bg-white">
        <h1>Gallery</h1>
        <div class="row">
            <div class="col-4">
                <img src="https://source.unsplash.com/cXUOQWdRV4I/350x250"
                class="img-thumbnail img-fluid">
            </div>
            <div class="col-4">
                <img src="https://source.unsplash.com/kfwPJieZVwI/350x250"
                class="img-thumbnail img-fluid">
            </div>
            <div class="col-4">
                <img src="https://source.unsplash.com/8CqDvPuo_kI/350x250"
                class="img-thumbnail img-fluid">
            </div>
            <div class="col-4 mt-4">
                <img src="https://source.unsplash.com/JdzHrfX4l4Q/350x250"
                class="img-thumbnail img-fluid">
            </div>
            <div class="col-4 mt-4">
                <img src="https://source.unsplash.com/T-tVt4xsCdE/350x250"
                class="img-thumbnail img-fluid">
            </div>
            <div class="col-4 mt-4">
                <img src="https://source.unsplash.com/F8t2VGnI47I/350x250"
                class="img-thumbnail img-fluid">
            </div>
        </div>
    </div>
    <footer class="bg-dark py-4 text-white mt-4">
        <div class="container">
            Student Information System | Copyright © {{ date("Y") }} Duniailkom
        </div>
    </footer>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/popper.min.js"></script>
</body>
</html>