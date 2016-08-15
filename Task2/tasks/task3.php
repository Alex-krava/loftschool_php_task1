<!doctype html>
<html lang="en">
<?php
$title = 'Задание #3';
require_once '../../Task1/tasks/common/_head.php'
?>
<body>
<div class="container">
    <div class="row">
        <h1>Задание 3</h1>
    </div>

    <?php

    calc('+', 22, 21, 34);
    calc('-', 22, 21, 34);
    calc('*', 22, 21, 34);
    calc('/', 22, 21, 34);
    calc('выдуманое арифметическое действие', 22, 21, 34);

    function calc($act){
        $result = 0;
        $count = func_num_args();
        if($act == '+'){
            for ($i = 1; $i < $count; $i++){
                $result = $result + (integer) func_get_arg($i);
            }
            echo $result.'<br/>';
        }
        elseif ($act == '-'){
            $result = (integer) func_get_arg(1) - $result;
            for ($i = 2; $i < $count; $i++){
                $result = $result - (integer) func_get_arg($i);
            }
            echo $result.'<br/>';
        }
        elseif ($act == '*' || $act == 'x'){
            $result = 1;
            for ($i = 1; $i < $count; $i++){
                $result = (integer) func_get_arg($i) * $result;
            }
            echo $result.'<br/>';
        }
        elseif ($act == '/' || $act == '%'){
            $result = (integer) func_get_arg(1);
            for ($i = 2; $i < $count; $i++){
                if((integer) func_get_arg($i) == 0){
                    echo "На ноль делить нельзя!".'<br/>';
                    exit;
                }else{
                    $result = $result / (integer) func_get_arg($i);
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