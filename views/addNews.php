<div id="addNews">
	<form action="/controllers/addNews.php" method="POST" name="addNews" onsubmit="return checkForm(this)">
		<label for="title">Заголовок новости</label>
		<br>
		<input type="text" name="title">
		<br>
		<label for="intro">Втупление новости</label>
		<br>
		<textarea cols="60" rows="10" name="introText"></textarea>
		<br>
		<label for="text">Текст новости</label>
		<br>
		<textarea cols="100" rows="15" name="text"></textarea>
		<br>
		<input type="submit" name="add" value="Добавить">
	</form>
</div>