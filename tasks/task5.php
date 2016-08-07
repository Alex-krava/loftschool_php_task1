<!doctype html>
<html lang="en">
<?php
$title = 'Задание #5';
require_once 'common/_head.php'
?>
<body>
<div class="container">
    <div class="row">
        <h1>Задание 5</h1>
    </div>

    <?php
    $day = 3;
    switch ($day){
        case $day >= 1 && $day <= 5:
            echo "Это рабочий день";
            break;
        case $day == 6 || $day == 7:
            echo "Это выходной день";
            break;
        case $day < 1 || $day > 7:
            echo "Неизвестный день";
            break;
    }
    ?>

</div>
</body>
</html>