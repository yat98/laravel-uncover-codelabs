<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students Data</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body>
    <div class="container text-center p-4 bg-white">
        <h1 class="text-center">Student Data</h1>
        <div class="row">
            <div class="m-auto ">
                <ol class="list-group">
                    <li class="list-group-item">
                    {{$student->name}} ( {{$student->nim}} ),
                    Birthdate: {{$student->birthdate}},
                    GPA: {{$student->gpa}}
                    </li>
                </ol>
            </div>
        </div>
    </div>
</body>
</html>