<?php require_once "func/func.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>News</title>
	<link rel="stylesheet" type="text/css" href="styles/style.css">
</head>
<body>
	<h1>Новостной сайт</h1>
	<div id="navDiv">
		<a class="nav" href="index.php">Главная</a>
		<a class="nav" href="?action=1">Добавить новость</a>
	</div>
	<?php 

		if (!empty($_GET['id'])) {
			$art = getIdArticle($_GET['id']);
			$title = $art['title'];
			$text = $art['text'];
			include "views/article.php";
		} else if (!empty($_GET['action'])) {
			include "views/addNews.php";
		} else {
			$art = getAllArticles();
			for ($i = 0; $i < count($art); $i++) {
				$id = $art[$i]['id'];
				$title = $art[$i]['title'];
				$introText = $art[$i]['introText'];
				include "views/introNewsAll.php";
			}
		}
	?>
</body>
</html>