<!doctype html>
<html lang="en">
<?php
$title = 'Задание #3';
require_once 'common/_head.php'
?>
<body>
<div class="container">
    <div class="row">
        <h1>Задание 3</h1>
    </div>

    <?php
        define("value", "unknown");
        if(!empty(value)){
            echo value."<br/>";
            define("value", 33);
            echo value;
        }
    ?>

</div>
</body>
</html>