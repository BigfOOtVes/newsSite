<?php 
	require_once __DIR__ . "/start.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>News</title>
	<link rel="stylesheet" type="text/css" href="styles/style.css">
	<script type="text/javascript">
		
		function checkForm(form) {
			const title = form.title.value;
			const intro = form.intro.value;
			const text = form.text.value;
			
			if (title.length < 4 || intro.length < 4 || text.length < 4) {
				alert ("Введены не корректные данные");
				return false;
			} else
				alert("Новость добавлена");
			return true;
		}

	</script>
</head>
<body>
	<h1>Новостной сайт</h1>
	<div id="navDiv">
		<a class="nav" href="/">Главная</a>
		<a class="nav" href="/?action=1">Добавить новость</a>
	</div>
	<?php
		/*
		if (!empty($_GET['id'])) {

			//$art = getIdArticle($_GET['id']);
			$sql = new Sql();
			$article = $sql->getArticle($_GET['id']);
			echo print_r($article);
			$view = new ArticleClass ($article);
			$view->render();
			
			
			//$title = $article['title'];
			//$text = $article['text'];

			//include "views/article.php";
			

		} else if (!empty($_GET['action'])) {
			include "views/addNews.php";
		} else {

			//$articles = getAllArticles();
			$sql = new Sql();
			$articles = $sql->getArticles();
			$view = new ArticleClass ($articles);
			$view->render();

			
			//for ($i = 0; $i < count($articles); $i++) {
				//$id = $articles[$i]['id'];
				//$title = $articles[$i]['title'];
				//$introText = $articles[$i]['introText'];
				
				//include "views/introNewsAll.php";
		}
		*/
		$args = [];
		parse_str($_SERVER['QUERY_STRING'], $args);
		
		$route = new Routes();
		
		$route->addRoute("id", function($id) {
			$sql = new Sql();
			$article = $sql->getArticle($id);
			$view = new ArticleClass ($article);
			$view->render();
		});
		
		$route->addRoute("action", function ($id) {
			include __DIR__ . "/views/addNews.php";
		});
		
		$route->render($args);
		
	?>
</body>
</html>