<?php 
	require_once "func/func.php";
	require_once "func/sql.php"; 
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
		<a class="nav" href="index.php">Главная</a>
		<a class="nav" href="?action=1">Добавить новость</a>
	</div>
	<?php 

		if (!empty($_GET['id'])) {

			//$art = getIdArticle($_GET['id']);
			$sql = new Sql();
			$art = $sql->getArticle($_GET['id']);
			
			$title = $art['title'];
			$text = $art['text'];

			include "views/article.php";

		} else if (!empty($_GET['action'])) {
			include "views/addNews.php";
		} else {

			//$arts = getAllArticles();
			$sql = new Sql();
			$arts = $sql->getArticles();

			for ($i = 0; $i < count($arts); $i++) {
				$id = $arts[$i]['id'];
				$title = $arts[$i]['title'];
				$introText = $arts[$i]['introText'];
				
				include "views/introNewsAll.php";
			}

		}
	?>
</body>
</html>