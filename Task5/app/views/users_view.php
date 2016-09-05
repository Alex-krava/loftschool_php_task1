<!doctype html>
<html lang="ru">
<?php
$title = 'Домашнее задание №5';
require_once '../Task1/tasks/common/_head.php';
?>
<body>
<?php
require_once 'common/_navigation.php';
?>
<div class="container">

    <div class="row">
        <h2 class="col-md-12 text-center">Пользователи</h2>
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Имя</th>
                <th>Email</th>
                <th>Возраст</th>
                <th>Текст</th>
                <th>Фото</th>
                <th>Статус</th>
            </tr>
        </thead>
        <tbody>
        <?php
        foreach ($data as $item){
        ?>
            <tr>
                <td><?=$item['username']?></td>
                <td><?=$item['email']?></td>
                <td><?=$item['age']?></td>
                <td><?=$item['userText']?></td>
                <td><?=$item['photos']?></td>
                <td><?=$item['status']?></td>
            </tr>
        <?php
        }
        ?>
        </tbody>
    </table>
</div>
</body>
</html>

</body>
</html>