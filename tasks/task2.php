<!doctype html>
<html lang="en">
<?php
$title = 'Задание #2';
require_once 'common/_head.php'
?>
<body>
<div class="container">
    <div class="row">
        <h1>Задание 2</h1>
    </div>

    <?php
        $img = 80;
        $markers = 23;
        $pencils = 40;
        $paints;


        decision($img, $markers, $pencils, $paints);

        function decision($img, $markers, $pencils, $paints){
            echo "На школьной выставке&nbsp;$img&nbsp;рисунков.&nbsp;";
            echo "$markers из них выполнены фломастерами,&nbsp;";
            echo "$pencils карандашами, а остальные — красками.<br/>";
            echo " Сколько рисунков, выполненные красками, на школьной выставке?<br/>";
            $paints = $img - ($markers + $pencils);
            echo 'ОТВЕТ:&nbsp;'.$paints.'&nbsp;рисунков выполнено красками';
        }
    ?>

</div>
</body>
</html>