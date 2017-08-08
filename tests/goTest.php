<?php

require_once __DIR__ . "/../models/Article.php";

$res = Article::selectAll();
$id = Article::selectId(18);
Article::renderId($id);
//var_dump($res);
