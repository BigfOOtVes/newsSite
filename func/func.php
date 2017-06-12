<?php

$mysql;

function connectDB() {
	global $mysql;
	$mysql = new mysqli("localhost", "root", "", "test");
}

function closeDB() {
	global $mysql;
	$mysql->close();
}

function getAllArticles() {
	global $mysql;
	connectDB();
	$sql = "SELECT * FROM introArticles";
	$res = $mysql->query($sql);
	closeDB();
	return resToArr($res);
}

function getIdArticle($id) {
	global $mysql;
	connectDB();
	$sql = "SELECT * FROM articles WHERE id='$id'"; 
	$res = $mysql->query($sql);
	closeDB();
	return $res->fetch_assoc();
}

function addNews ($title, $intro, $text) {
	global $mysql;
	connectDB();
	$sqlIntroArticle = "INSERT INTO introArticles (title, introText) VALUES ('$title', '$intro')";
	$sqlArticle = "INSERT INTO articles (title, text) VALUES ('$title', '$text')";
	$mysql->query($sqlIntroArticle);
	$mysql->query($sqlArticle);
}

function resToArr($res) {
	$arr = [];
	while ($row = $res->fetch_assoc())
		$arr[] = $row;
	return $arr;
}

