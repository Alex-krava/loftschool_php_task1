<!doctype html>
<html lang="en">
<?php
$title = 'Задание #4';
require_once '../../Task1/tasks/common/_head.php'

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
        <h1>Задание 4</h1>
    </div>

    <?php
    error_reporting( E_ERROR );

    tableFunc(5, 8);

    function tableFunc($numberFirst, $numberSecond){
        if(func_num_args() == 2){
            if(is_int($numberFirst) && is_int($numberSecond)){
                if(is_int($numberFirst) % 1 == 0 && is_int($numberSecond) % 1 == 0){
                ?>
                    <table>
                        <?php
                        for ($i = 1; $i <= $numberFirst; $i++){
                            ?>
                            <tr>
                                <?php
                                for ($b = 1; $b <= $numberSecond; $b++){
                                    $c = $i * $b;
                                    ?>
                                    <td><?="$c&nbsp;";?></td>
                                    <?php
                                }
                                ?>
                            </tr>
                            <?php
                        }
                        ?>
                    </table>
                <?php
                }
                else{
                    echo 'Число не является целым';
                }
            }
            else{
                echo 'Значение не является числовым';
            }
        }
        else{
            echo "Необходимое количество значений: 2 числа".'<br/>';
        }
    }
    ?>

</div>
</body>
</html>