<?php
require_once "../func/func.php";
require_once "../func/sql.php";

$title = htmlspecialchars($_POST['title']);
$intro = htmlspecialchars($_POST['intro']);
$text = htmlspecialchars($_POST['text']);

//addNews($title, $intro, $text);
$news = new Sql();
$news->addArticle($title, $intro, $text);

header("location: " . $_SERVER['HTTP_REFERER']);

