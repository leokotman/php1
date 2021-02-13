<?php
define("ROOT", $_SERVER["DOCUMENT_ROOT"]);
define("IMG_BIG", ROOT . "/PHP1/php1/les4/gallery-img/big/");
define("IMG_SMALL", ROOT . "/PHP1/php1/les4/gallery-img/small/");

include "classSimpleImage.php";

if (isset($_POST['load'])) {
    $path_big = IMG_BIG . $_FILES["image"]["name"];
    $path_small = IMG_SMALL . $_FILES["image"]["name"];

    //Проверка на "запрещёнку"
    $blacklist = ['.php', '.phtml', '.php3', 'php4'];
    foreach ($blacklist as $item){
        if (preg_match("/$item\$/i", $_FILES["image"]["name"])) {
            echo "You can't upload PHP-files";
            exit;
        }
    }

    $imgInfo = getimagesize($_FILES["image"]["tmp_name"]);

    if ($imgInfo['mime'] != 'image/png' && $imgInfo['mime'] != 'image/gif' &&
        $imgInfo['mime'] != 'image/jpeg') {
        echo "You can upload jpg-files only (wrong content / not an image).";
        exit;
    }

    //Проверка на размер
    if ($_FILES["image"]["size"] > 1024 * 5 * 1024) {
        echo "File size can't be more than 5 Mb";
        exit;
    }

    if (move_uploaded_file($_FILES["image"]["tmp_name"], $path_big)) {
        $image = new SimpleImage();
        $image->load($path_big);
        $image->resizeToWidth(150);
        $image->save($path_small);

        //header("Location: /");
    } else {
        echo "Error<br>";
        die();
    }
}

function createGallery($path){
    return array_splice(scandir($path), 3);
}

$images = createGallery(IMG_BIG);

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
            <? foreach ($images as $filename): ?>
                <a rel='gallery' class='photo' href='gallery-img/big/<?= $filename ?>' target='_blank'>
                <img class='cat-small' src='gallery-img/small/<?= $filename ?>' width='150' height='100' alt="cat-photo-small"></a>
            <? endforeach; ?>
        </section>
        <h3>Upload photo</h3>
        <form method="post" enctype="multipart/form-data">
            <input type="file" name="image">
            <input type="submit" value="Upload" name="load">
        </form>
    </main>
</body>
</html>