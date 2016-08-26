<?php
$dir    = 'photos';
$files = scandir($dir, 1);
$count = count($files) - 2;
?>

<div class="row">
    <h2 class="col-md-12 text-center">Фото</h2>
</div>
<?php
for($i = 0; $i < $count; $i++) {
    ?>
    <form method="POST" class="col-md-2 text-center photo-form">
        <img src="<?=$dir.'/'.iconv('windows-1251', 'utf-8', $files[$i]);?>" alt="<?=iconv('windows-1251', 'utf-8', $files[$i])?>" class="img-thumbnail">
        <input name="imgNewName" type="text" class="form-control name-file_input" value="<?=iconv('windows-1251', 'utf-8', $files[$i])?>">
        <input name="imgDir" type="hidden" value="<?=$dir?>">
        <input name="imgName" type="hidden" value="<?=iconv('windows-1251', 'utf-8', $files[$i]);?>">
        <input style="margin-top: 10px" type="submit" class="btn btn-default btn-photo change-name-button" value="Изменить название">
        <input style="margin-top: 10px" type="submit" class="btn btn-default btn-photo delete-file-button" value="Удалить">
    </form>
    <?php
}
?>