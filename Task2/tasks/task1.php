<!doctype html>
<html lang="en">
<?php
$title = 'Задание #1';
require_once '../../Task1/tasks/common/_head.php'
?>
<body>
<div class="container">
    <div class="row">
        <h1>Задание 1</h1>
    </div>

    <?php
        $arr = ['Случайная строка 1', 'Случайная строка 2', 'Случайная строка 3', 'Случайная строка 4' ];

        lines($arr);
        echo lines($arr, true);

        function lines($array, $combine = false){
            if($combine){
                $line = join('&nbsp;',$array);
                return $line;
            }
            else{
                $count = count($array);
                for ($i = 0; $i < $count; $i++){
                    echo "<p>$array[$i]</p>";
                }
            }
        }
    ?>

</div>
</body>
</html>