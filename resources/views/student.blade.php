<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <title>Student</title>
</head>
<body>
    <div class="container text-center p-4 bg-white">
        <h1>Student List</h1>
        <div class="row">
            <div class="col-sm-8 col-md-6 m-auto">
                <ol class="list-group">
                    @forelse($students as $student)
                        <li class="list-group-item">{{ $student }}</li>
                    @empty
                        <div class="alert alert-dark d-inline-block">No data...</div>
                    @endforelse
                </ol>
            </div>
        </div>
    </div>
</body>
</html>