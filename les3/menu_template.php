<?php
function generateMenu(int $item){
    for ($i = 1; $i <= $item; $i++){
        echo "<li><a href='#'>Меню {$i}</a></li> . <br>";
    }
}
$menu = generateMenu(4);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <ul>
        <?=$menu?>
    </ul>
</body>
</html>


