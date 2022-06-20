<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <title>Students</title>
</head>
<body>
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <div class="py-4">
                    <h2>Students</h2>
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nim</th>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>Major</th>
                            <th>Address</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($students as $student)
                            <tr>
                                <th>{{$loop->iteration}}</th>
                                <td>{{$student->nim}}</td>
                                <td>{{$student->name}}</td>
                                <td>{{$student->gender == 'F'?'Female':'Male'}}</td>
                                <td>{{$student->major}}</td>
                                <td>{{$student->address == '' ? 'N/A' : $student->address}}</td>
                            </tr>
                        @empty
                            <td colspan="6" class="text-center">Empty data...</td>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>