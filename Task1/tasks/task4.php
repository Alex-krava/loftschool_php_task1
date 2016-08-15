<!doctype html>
<html lang="en">
<?php
$title = 'Задание #4';
require_once 'common/_head.php'
?>
<body>
<div class="container">
    <div class="row">
        <h1>Задание 4</h1>
    </div>

    <?php
        $age = 35;
        if($age >= 18 && $age <= 65){
            echo "Вам еще работать и работать";
        }
        elseif($age > 65){
            echo "Вам пора на пенсию";
        }
        elseif($age >= 1 && $age <= 17){
            echo "Вам ещё рано работать";
        }
        else{
            echo "Неизвестный возраст";
        }
    ?>

</div>
</body>
</html>