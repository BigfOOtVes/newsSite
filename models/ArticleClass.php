<?php

class ArticleClass {

	private $arr = [];

	public function __construct($data) {

		$this->arr = $data;

	}

	public function render () {

		if (count($this->arr[0]) === 3) {
			for ($i = 0; $i < count($this->arr); $i ++) {
				$id = $this->arr[$i]['id'];
				$title = $this->arr[$i]['title'];
				$introText = $this->arr[$i]['introText'];
				include "views/introNewsAll.php";
			}
		} else {
			$title = $this->arr['title'];
			$text = $this->arr['text'];
			include "views/article.php";
		}
		return;

	}
}