<!doctype html>
<html lang="en">
<?php
$title = 'Задание #6';
require_once 'common/_head.php'
?>
<body>
<div class="container">
    <div class="row">
        <h1>Задание 6</h1>
    </div>

    <?php
    $bmw = ['model' => 'X5', 'speed' => 120, 'doors' => 5, 'year' => '2015'];
    $toyota = ['model' => 'Corolla', 'speed' => 100, 'doors' => 4, 'year' => '2016'];
    $opel = ['model' => 'Astra', 'speed' => 110, 'doors' => 5, 'year' => '2014'];

    $cars = array_merge(['bmw' => $bmw], ['toyota' => $toyota], ['opel' => $opel]);
    ?>
    <p>CAR bmw</p>
    <p><?=$cars['bmw']['model']?></p>
    <p><?=$cars['bmw']['speed']?></p>
    <p><?=$cars['bmw']['doors']?></p>
    <p><?=$cars['bmw']['year']?></p>
    <br/>
    <p>CAR toyota</p>
    <p><?=$cars['toyota']['model']?></p>
    <p><?=$cars['toyota']['speed']?></p>
    <p><?=$cars['toyota']['doors']?></p>
    <p><?=$cars['toyota']['year']?></p>
    <br/>
    <p>CAR opel</p>
    <p><?=$cars['opel']['model']?></p>
    <p><?=$cars['opel']['speed']?></p>
    <p><?=$cars['opel']['doors']?></p>
    <p><?=$cars['opel']['year']?></p>
    <br/>

</div>
</body>
</html>