<?php
$database = @mysqli_connect('localhost: 3306', 'root', '18081992', 'art-shop')
            or die("Error: " . mysqli_connect_error());

mysqli_set_charset ($database , "UTF-8");

$result = mysqli_query($database, 'SELECT * FROM `art-shop`.paintings;');

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
            <b><?=$row['name']?></b>
        </div>
    <?php endwhile; ?>
</body>
</html>
