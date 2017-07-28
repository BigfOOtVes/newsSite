<?php

class Sql {

	private $tableName;
	private $sql;

	public function __construct($tableName) {
		
		$this->tableName = $tableName;
		
	}

	public function getAllArticles () {
		
		$this->sql = mysqli("localhost", "root", "", "test");
		$res = $this->sql->query("SELECT * FROM `'$this->tableName'`");
		$this->sql = close();

	}

	public function getArticle () {

	}

	public function addArticle () {

	}

	private function resToArr ($res) {
		
		$arr = [];
		while ($row = $res->fetch_assoc())
			$arr[] = $row;
		return $arr;

	}
}