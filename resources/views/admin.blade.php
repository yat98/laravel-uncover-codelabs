<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dasboard</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body class="bg-light">
    <div class="container text-center mt-3 p-4 bg-white">
        <h1>Admin Page</h1>
        <div class="row">
            <div class="col-12">
                @component('layouts.alert', ['class' => 'warning', 'title' => 'Warning'])
                    100 Student must be fix
                @endcomponent
                @component('layouts.alert', ['class' => 'danger', 'title' => 'Danger'])
                    Today is LPJ deadline
                @endcomponent
                @component('layouts.alert', ['class' => 'success', 'title' => 'Success'])
                    Next month is vacation
                @endcomponent
            </div>
        </div>
    </div>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/popper.min.js"></script>
</body>
</html>