<?php
/**
 * Created by PhpStorm.
 * User: andrei
 * Date: 11.09.15
 * Time: 15:46
 */
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Task-1</title>
	<link rel="stylesheet" href="/packages/bootstrap/dist/css/bootstrap.css">
	<link rel="stylesheet" href="/src/css/task1/main.css">
	<link rel="stylesheet" href="/packages/glisse/glisse.css">
</head>
<body class="container">
	<header>
		<h1>Мое первое задание</h1>
	</header>
	<nav>
		<ul class="nav nav-pills nav-justified">
		  <li id="main" class="<?php echo isset($main) ? $main : "";?>"><a href="/task1/main">Главная</a></li>
		  <li id="news" class="<?php echo isset($news) ? $news : "";?>"><a href="/task1/news">Новости</a></li>
		  <li id="gallery" class="<?php echo isset($gallery) ? $gallery : "";?>"><a href="/task1/gallery">Галерея</a></li>
		</ul>
	</nav>
	<section>
		<?=$content?>
	</section>

	<script src="/packages/jquery/dist/jquery.js"></script>
	<script src="/packages/bootstrap/dist/js/bootstrap.js"></script>
	<script src="/packages/glisse/glisse.js"></script>
	<script src="/src/js/task1/<?=$script?>"></script>
</body>
</html>


