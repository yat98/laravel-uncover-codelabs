<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student List</title>
    <link rel="stylesheet" href="/css/my-style.css">
</head>
<body>
    <h1>Student List</h1>
    <ol>
        <?php
            foreach ($students as $student) {
                echo "<li>{$student}</li>";
            }    
        ?>
    </ol>
    <div>
        <img src="/img/people1.jpg">
        <img src="/img/people2.jpg">
        <img src="/img/people3.jpg">
        <img src="/img/people4.jpg">
    </div>
    <div>
        Copyright © <?= date('Y') ?> Duniailkom
    </div>
    <script src="/js/my-script.js"></script>
</body>
</html>