<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('/css/bootstrap.min.css')}} " rel="stylesheet">
    <title>Student List</title>
</head>
<body>
    <div class="container text-center p-4">
        <h1>Student List</h1>
        <div class="row">
            <div class="m-auto">
                <ol class="list-group">
                    @forelse ($results as $result)
                        <li class="list-group-item">
                            {{$result->name}} ( {{$result->nim}} ),
                            Birthdate: {{$result->birthdate}},
                            GPA: {{$result->gpa}}
                        </li>
                    @empty
                        <div class="alert alert-dark d-inline-block">Empty...</div>
                    @endforelse
                </ol>
            </div>
        </div>
    </div>
</body>
</html>