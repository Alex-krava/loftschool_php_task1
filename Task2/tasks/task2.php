<!doctype html>
<html lang="en">
<?php
$title = 'Задание #2';
require_once '../../Task1/tasks/common/_head.php'
?>
<body>
<div class="container">
    <div class="row">
        <h1>Задание 2</h1>
    </div>

    <?php

    calc(['22', '21'], '+');
    calc(['22', '21'], '-');
    calc(['22', '21'], '*');
    calc(['22', '21'], '/');
    calc(['22', '21'], 'выдуманое арифметическое действие');

    function calc($number, $act){
        $result = 0;
        $count = count($number);
        if($act == '+'){
            for ($i = 0; $i < $count; $i++){
                $result = $result + (integer) $number[$i];
            }
            echo $result.'<br/>';
        }
        elseif ($act == '-'){
            $result = (integer) $number[0] - $result;
            for ($i = 1; $i < $count; $i++){
                $result = $result - (integer) $number[$i];
            }
            echo $result.'<br/>';
        }
        elseif ($act == '*' || $act == 'x'){
            $result = 1;
            for ($i = 0; $i < $count; $i++){
                $result = (integer) $number[$i] * $result;
            }
            echo $result.'<br/>';
        }
        elseif ($act == '/' || $act == '%'){
            $result = (integer) $number[0];
            for ($i = 1; $i < $count; $i++){
                if((integer) $number[$i] == 0){
                    echo "На ноль делить нельзя!".'<br/>';
                    exit;
                }else{
                    $result = $result / (integer) $number[$i];
                }
            }
            echo $result.'<br/>';
        }
        else{
            echo 'Такого арифметического действия несуществует'.'<br/>';
        }
    }
    ?>

</div>
</body>
</html>