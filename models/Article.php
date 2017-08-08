<?php

require_once __DIR__ . "/AbstrModel.php";

class Article extends AbstrModel {
	protected static $table = "articles";

	public static function renderAll($arrObj) {
		for ($i = 0; $i < count($arrObj); $i++) {
			$title = $arrObj[$i]->title;
			$introText = $arrObj[$i]->introText;
			$id = $arrObj[$i]->id;
			include __DIR__ . "/../views/introNewsAll.php";
		}
	}

	public static function renderId($obj) {
		$title = $obj->title;
		$text = $obj->text;
		include __DIR__ . "/../views/Article.php";
	}
}