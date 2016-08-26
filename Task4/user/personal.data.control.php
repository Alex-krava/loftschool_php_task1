<?php
if(isset($_FILES)){
    session_start();
    if(isset($_SESSION['user'])){
        $file = getimagesize($_FILES['personalPhoto']['tmp_name']);
        if($file['mime'] != 'image/png' && $file['mime'] != 'image/jpeg') {
            echo "<p style='color:red; text-align: center'>Допустимые файлы расширения .png и .jpeg</p>";
            echo '<meta http-equiv="refresh" content="2; url=/Task4"/>';
            exit;
        }
        $file = $_FILES['personalPhoto'];
        $dir = '../photos';

        if(!file_exists($dir)){
            mkdir($dir, 0777);
        }
        $fileName = iconv('utf-8','windows-1251',$file['name']);
        $fileName = str_replace(" ","_",$fileName);
        $file_name = $dir.'/'.$fileName;

        if(move_uploaded_file($file['tmp_name'], $file_name)){
            echo "<p style='color:green; text-align: center'>Файл сохранен</p>";
            echo '<meta http-equiv="refresh" content="2; url=/Task4"/>';
            exit;
        }else{
            echo "<p style='color:red; text-align: center'>Возникла ошибка при загрузки</p>";
            echo '<meta http-equiv="refresh" content="2; url=/Task4"/>';
            exit;
        }
    }
}
else{
    exit;
}

if($_POST){
    require_once '../db/db.config.php';
    session_start();
    $username = strip_tags($_POST['personalName']);
    $age = strip_tags($_POST['personalAge']);
    $data = strip_tags($_POST['personalData']);
    $user = $_SESSION['user'];


    if($username == '' || $age == '' || $data == ''){
        echo "Все поля должны быть заполнены";
        echo '<meta http-equiv="refresh" content="3; url=/Task4"/>';
        exit;
    }

    $sql = "UPDATE `users` SET `username`='$username', `age`='$age', `userText`='$data' WHERE `email` = '$user'";
    $result = $connection->query($sql);

    echo "<p style='color:green; text-align: center'>Ваши данные сохранены</p>";
    echo '<meta http-equiv="refresh" content="2; url=/Task4"/>';
    exit;
}