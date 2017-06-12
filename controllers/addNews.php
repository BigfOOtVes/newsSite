<?php
require_once "../func/func.php";

$title = htmlspecialchars($_POST['title']);
$intro = htmlspecialchars($_POST['intro']);
$text = htmlspecialchars($_POST['text']);

addNews($title, $intro, $text);

header("location: " . $_SERVER['HTTP_REFERER']);

