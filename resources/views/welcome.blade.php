<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laravel Study</title>
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
</head>
<body>
    <div class="container text-center py-5">
        <button type="button" class="btn btn-lg btn-danger" data-toggle="popover"
        title="Busy..." data-bs-content="Laravel Uncover is the best!">
        laravel Study </button>
    </div>
    <script src="{{ mix('/js/app.js') }}"></script>
    <script>
        $(function () {
            $('[data-toggle="popover"]').popover()
        })
    </script>
</body>
</html>