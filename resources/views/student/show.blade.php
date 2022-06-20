<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <title>Bio {{$student->name}}</title>
</head>
<body>
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <div class="pt-3">
                    <h1 class="h2 mr-auto">Bio {{$student->name}}</h1>
                </div>
                <hr>
                <ul>
                    <li>NIM: {{$student->nim}} </li>
                    <li>Name: {{$student->name}} </li>
                    <li>Gender:
                    {{$student->gender == 'F' ? 'Female' : 'Male'}}
                    </li>
                    <li>Major: {{$student->major}} </li>
                    <li>Address:
                    {{$student->address == '' ? 'N/A' : $student->address}}
                    </li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>