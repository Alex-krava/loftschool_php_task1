<!doctype html>
<html lang="en">
<?php
$title = 'Задание #5';
require_once '../../Task1/tasks/common/_head.php'

?>
<body>
<div class="container">
    <div class="row">
        <h1>Задание 5</h1>
    </div>

    <?php
    $str = 'Коту тащат уток';
    $str1 = 'Кот тащит кота';

    result($str);
    result($str1);

    function config($line){
        $transLine =  str_replace(' ','',$line);
        $transLine =  mb_strtolower($transLine);
        $count = iconv_strlen( $transLine);

        for ($i = $count; $i >= 0; $i--){
            $testStr[] = mb_substr($transLine,$i,1,'UTF-8');
        }
        $testStr = implode("", $testStr);
        if($testStr == $transLine){
            return true;
        }
        else{
            return false;
        }
    }

    function result($line){
        $result = config($line);
        if($result == 1){
            echo "<p style='color: green'> Фраза: ' $line ' является палиндромом! </p>";
        }
        else{
            echo "<p style='color: red'>Фраза: ' $line ' не является палиндромом!</p>";
        }
    }

    ?>

</div>
</body>
</html>