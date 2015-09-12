<?php
/**
 * Created by PhpStorm.
 * User: andrei
 * Date: 11.09.15
 * Time: 23:28
 */
?>

<form id="upload-form" action="<?php echo URL::site('task1/upload') ?>" method="post" enctype="multipart/form-data">
    <input type="file" name="image" id="image">
    <input type="submit" name="submit" id="submit" value="Загрузить">
    <span>(Только: JPG, PNG, GIF)</span>
</form>
<div class="row">

<?php foreach($images as $image): ?>
    <div class="col-lg-4">
        <img src="<?php echo $dir.$image['img']; ?>" data-glisse-big="<?php echo $dir.$image['img']; ?>" class="pics" rel='group1' alt="">
    </div>
<?php endforeach ?>

</div>