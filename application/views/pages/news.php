<?php
/**
 * Created by PhpStorm.
 * User: andrei
 * Date: 11.09.15
 * Time: 19:22
 */
?>
<div id="add_news">
	<div class="title">Добавить новость</div>
	<div class="values">
		<textarea id='news_textarea' placeholder="Текст"></textarea>
		<input type="text" class="form-control" id="title" placeholder="Название" maxlength="100">
		<input type="text" class="form-control" id="author" placeholder="Автор" maxlength="50">
		<button type="button" id='submit' class="btn btn-info">Добавить</button>
	</div>
</div>

<?php foreach($data as $row): ?>
<div class="new">
	<h3><span class="title"><?php echo $row['title']; ?></span> <span class="glyphicon glyphicon-chevron-down"></span></h3>
	<div class="content">
		<div class="parameters">
			<span class="author"><span class="glyphicon glyphicon-user"></span><?=$row['author']?></span>
			<span class="date"><span class="glyphicon glyphicon-calendar"></span><?=$row['date']?></span>
		</div>
		<div class="text">
            <?=$row['text']?>
		</div>
	</div>
</div>
<?php endforeach; ?>