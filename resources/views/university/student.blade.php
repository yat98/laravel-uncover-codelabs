<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student List</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container text-center mt-4">
        <h1>Student List</h1>
        <ol class="list-group my-4">
            <?php
                foreach ($students as $student) {
                    echo "<li class=\"list-group-item\">{$student}</li>";
                }    
            ?>
        </ol>
        <div>
            <img class="rounded-circle img-thumbnail m-2" src="/img/people1.jpg">
            <img class="rounded-circle img-thumbnail m-2" src="/img/people2.jpg">
            <img class="rounded-circle img-thumbnail m-2" src="/img/people3.jpg">
            <img class="rounded-circle img-thumbnail m-2" src="/img/people4.jpg">
        </div>
        <div>
            Copyright © <?= date('Y') ?> Duniailkom
        </div>
    </div>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/my-script.js"></script>
</body>
</html>