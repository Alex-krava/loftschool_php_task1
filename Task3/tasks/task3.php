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
    for ($i = 0; $i < 50; $i++) {
        $arr[$i] = rand(1, 100);
    }

    $file = fopen('files/csv/file.csv', 'w');
    fputcsv($file, $arr);
    fclose($file);

    $fileRead = fopen("files/csv/file.csv", "r");
    $arrayRead = fgetcsv($fileRead, ",");
    $sum = 0;

    for($i = 0; $i < count($arrayRead); $i++){
        if($arrayRead[$i] % 2 == 0){
            $sum = $sum + $arrayRead[$i];
        }
    }

    echo "Сумма четных чисел равна: " . $sum;
    ?>

</div>
</body>
</html>