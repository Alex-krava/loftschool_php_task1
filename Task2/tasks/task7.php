<!doctype html>
<html lang="en">
<?php
$title = 'Задание #7';
require_once '../../Task1/tasks/common/_head.php'

?>
<body>
<div class="container">
    <div class="row">
        <h1>Задание 7</h1>
    </div>

    <?php
    $str = 'Карл у Клары украл Кораллы';
    $str2 = 'Две бутылки лимонада';

    $str = preg_replace ("/К/","",$str);
    echo $str.'<br/>';
    $str2 = preg_replace ("/Две/","Три",$str2);
    echo $str2.'<br/>';

    ?>

</div>
</body>
</html>