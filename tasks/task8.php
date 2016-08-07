<!doctype html>
<html lang="en">
<?php
$title = 'Задание #8';
require_once 'common/_head.php'
?>
<body>
<div class="container">
    <div class="row">
        <h1>Задание 8</h1>
    </div>

    <?php
    $str = "Отдельные слова из задания #8";
    echo $str."<br>";

    $arr = explode(' ',$str);
    print_r($arr);
    echo "<br/>";

    $count = count($arr);
    $b = $count - 1;
    $i = 0;

    while ($i < $count){
        $newArr[$i] = $arr[$b];
        $i++;
        $b--;
    }
    $newStr = implode('/', $newArr);
    echo $newStr;
    ?>

</div>
</body>
</html>