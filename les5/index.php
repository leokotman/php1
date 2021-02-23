<?php
include "db.php";
mysqli_set_charset ($database , "UTF-8");

$result = mysqli_query($database, 'SELECT * FROM `paintings` WHERE 1');

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Art shop</title>
</head>
<body>
<?php while ($row = mysqli_fetch_assoc($result)): ?>
    <div>
        <a href="painting.php?id=<?=$row['id']?>">
            <h2><?=$row['name']?></h2>
        </a>
    </div>
<?php endwhile; ?>
</body>
</html>
