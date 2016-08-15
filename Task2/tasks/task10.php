<!doctype html>
<html lang="en">
<?php
$title = 'Задание #10';
require_once '../../Task1/tasks/common/_head.php'

?>
<body>
<div class="container">
    <div class="row">
        <h1>Задание 10</h1>
    </div>

    <?php

    $text = 'Hello again!';
    $dir = 'anothertest.txt';

    addFile($dir, $text);

    function addFile($dir, $text){
        $file = fopen($dir, "w" );
        fwrite($file, $text);
        fclose($file);
    }
    echo "Файл $dir с текстом $text создан!"

    ?>

</div>
</body>
</html>