<!doctype html>
<html lang="en">
<?php
$title = 'Задание #8';
require_once '../../Task1/tasks/common/_head.php'

?>
<body>
<div class="container">
    <div class="row">
        <h1>Задание 8</h1>
    </div>

    <?php
    $line = 'RX packets:950381 errors:0 dropped:0 overruns:0 frame:0.';
    rxPack($line);

    function smileGen(){
        echo "&#9786;";
    }
    function rxPack($line){
        preg_match("/packets:([^&]*)errors:/", $line, $value);
        $smileSymbol = preg_match("#\:\)#", $line);

        if($smileSymbol){
            smileGen();
        }
        else{
            if($value[1] > 1000){
                echo "Сеть есть";
            }
            else{
                echo "Сети нет";
            }
        }
    }
    ?>

</div>
</body>
</html>