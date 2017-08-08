<?php
require_once __DIR__ . "/../start.php";

//$title = htmlspecialchars($_POST['title']);
//$intro = htmlspecialchars($_POST['introText']);
//$text = htmlspecialchars($_POST['text']);

$article = new Article();
$article->title = htmlspecialchars($_POST['title']);
$article->text = htmlspecialchars($_POST['text']);
$article->introText = htmlspecialchars($_POST['introText']);
$article->insert();

//addNews($title, $intro, $text);
//$new = new Sql();
//$new->addArticle($title, $intro, $text);

header("location: " . $_SERVER['HTTP_REFERER']);

