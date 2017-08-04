<?php

class Routes {

	private $arrRoutes = [];

	public function __construct() {
		$this->arrRoutes['/'] = function () {
			$sql = new Sql();
			$articles = $sql->getArticles();
			$view = new ArticleClass ($articles);
			$view->render();
			return;
		};
	}

	public function addRoute ($uri, $func) {
		$this->arrRoutes[$uri] = $func;
	}

	public function render ($args) {
		
		if (count($args) === 0) {
			return call_user_func($this->arrRoutes['/']);
		} else {
			$key = key($args);
			$id = $args[$key];
			return call_user_func($this->arrRoutes[$key]($id));
		}
	}
}