<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('/css/bootstrap.min.css')}} " rel="stylesheet">
    <title>Students Data</title>
</head>
<body>
    <div class="container text-center p-4">
        <h1>Students Data</h1>
            <div class="row">
                <div class="m-auto">
                <ol class="list-group">
                @forelse ($students as $student)
                    <li class="list-group-item">
                        {{$student->name}} ( {{$student->nim}} ),
                        Birthdate: {{$student->birthdate}},
                        GPA: {{$student->gpa}}
                    </li>
                @empty
                    <div class="alert alert-dark d-inline-block">No data...</div>
                @endforelse
                </ol>
            </div>
        </div>
    </div>
</body>
</html>