<?php
include 'db.php';

$id = (int)$_GET['id'];

$result = mysqli_query($database, "SELECT * FROM `paintings` WHERE id = {$id}");

$row = mysqli_fetch_assoc($result);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <h2><?=$row['name']?></h2>
        <b><?=$row['price']?></b>
    </div>
</body>
</html>
