<?php
$images_arr = array_splice(scandir("gallery-img/small"), 3);

function galleryConstruct($images){
    $imgItem = '';
    foreach ($images as $number => $image){
        $imgItem .= "<a rel='gallery' class='photo' href='gallery-img/big/{$image}' target='_blank'>
                    <img class='cat-small' src='gallery-img/small/{$image}' width='150' height='100'></a>";
    }
    return $imgItem;
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>My gallery</title>
</head>
<body>
    <header id="header">
        <h1>My CAT gallery</h1>
    </header>
    <main>
        <section class="gallery">
            <?=galleryConstruct($images_arr)?>
        </section>
    </main>
</body>
</html>
