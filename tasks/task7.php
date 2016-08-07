<!doctype html>
<html lang="en">
<?php
$title = 'Задание #7';
require_once 'common/_head.php'
?>
<style>
    table{
        width: 50%;
        margin: 10px auto;
        font-size: 16px;
    }
    td{
        width: 10%;
        height: 30px;
    }
</style>
<body>
<div class="container">
    <div class="row">
        <h1>Задание 7</h1>
    </div>
    <table>
    <?php
    for ($i = 1; $i <= 10; $i++){
        ?>
        <tr>
        <?php
        for ($b = 1; $b <= 10; $b++){
            $c = $i * $b;

            if($i % 2 == 0 && $b % 2 == 0){
                ?>
                <td>(<?="$c&nbsp;";?>)</td>
                <?php
            }
            elseif($i % 2 == 1 && $b % 2 == 1){
                ?>
                <td>[<?="$c&nbsp;";?>]</td>
                <?php
            }
            else{
                ?>
                <td><?="$c&nbsp;";?></td>
                <?php
            }
        }
        ?>
        </tr>
        <?php
    }
    ?>
    </table>
</div>
</body>
</html>