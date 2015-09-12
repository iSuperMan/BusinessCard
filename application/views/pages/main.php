<?php
/**
 * Created by PhpStorm.
 * User: andrei
 * Date: 11.09.15
 * Time: 17:33
 */
?>
<div class="tools">
    <button type="button" id="edit" class="btn btn-default">
        Редактировать
        <span class="glyphicon glyphicon-pencil"></span>
    </button>
    <div class="secondTools">
        <button type="button" id="confirm" class="btn btn-info">Изменить</button>
        или
        <button type="button" id="cancel" class="btn btn-default">Отмена</button>
    </div>
</div>
<div class="content" data-edit="false">
    <pre id="text"><?=$data[0]['content']?></pre>
    <textarea id="textarea" cols="30" rows="10"></textarea>
</div>
