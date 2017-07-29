<?php

class Sql {

	private $mySql;

	public function __construct() {
		
		$this->mySql = new mysqli("localhost", "root", "", "test"); 
		
	}

	public function getArticles () {

		$res = $this->mySql->query("SELECT * FROM `introArticles`");
		return $this->resToArr($res);

	}

	public function getArticle ($id) {

		$res = $this->mySql->query("SELECT * FROM `articles` WHERE id='$id'");
		return $res->fetch_assoc();

	}

	public function addArticle ($title, $intro, $text) {

		$sqlIntroArticle = "INSERT INTO `introArticles` (title, introText) VALUES ('$title', '$intro')";
		$sqlArticle = "INSERT INTO `articles` (title, text) VALUES ('$title', '$text')";
		$this->mySql->query($sqlIntroArticle);
		$this->mySql->query($sqlArticle);

	}

	private function resToArr ($res) {

		$arr = [];
		while ($row = $res->fetch_assoc())
			$arr[] = $row;
		return $arr;

	}
}