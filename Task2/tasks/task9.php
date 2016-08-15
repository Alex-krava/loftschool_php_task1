<!doctype html>
<html lang="en">
<?php
$title = 'Задание #9';
require_once '../../Task1/tasks/common/_head.php'

?>
<body>
<div class="container">
    <div class="row">
        <h1>Задание 9</h1>
    </div>

    <?php

    fileOpen('files');

    function fileOpen($dir){
        if ($handle = opendir($dir)) {
            while (false !== ($file = readdir($handle))) {
                if ($file != "." && $file != "..") {
                    $file = file_get_contents("$dir/$file");
                    echo $file;
                }
            }
            closedir($handle);
        }
    }
    ?>

</div>
</body>
</html>