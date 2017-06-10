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
	<a id="nav" href="index.php">Главная</a>
	<?php 
		if (isset($_GET['id']))
			echo "Присутствуем ключ id";

		$art = getAllArticles();
		for ($i = 0; $i < count($art); $i++) {
			$id = $art[$i]['id'];
			$title = $art[$i]['title'];
			$introText = $art[$i]['introText'];
			include "views/introNewsAll.php";
		}
	?>
</body>
</html>