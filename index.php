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
	<?php 
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