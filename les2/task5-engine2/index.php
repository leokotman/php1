<?php

//TODO соберите страницу о нас с меню

$menu = renderTemplate('menu');
echo renderTemplate('layout', $menu);
$about = renderTemplate("about");
echo renderTemplate("about", $about);

function renderTemplate($page, $content = "") {
    ob_start();
    include $page . ".php";
    return ob_get_clean();
}