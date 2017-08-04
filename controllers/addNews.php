<?php
require_once __DIR__ . "/../start.php";

$title = htmlspecialchars($_POST['title']);
$intro = htmlspecialchars($_POST['intro']);
$text = htmlspecialchars($_POST['text']);

//addNews($title, $intro, $text);
$new = new Sql();
$new->addArticle($title, $intro, $text);

header("location: " . $_SERVER['HTTP_REFERER']);

