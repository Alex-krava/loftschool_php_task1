<?php
if($_POST){
    session_start();
    if(isset($_SESSION['user'])){
        $pathFolder = strip_tags($_POST['imgDir']);
        $imgName = iconv('utf-8','windows-1251',strip_tags($_POST['imgName']));
        $imgNewName = iconv('utf-8','windows-1251',strip_tags($_POST['imgNewName']));
        if($imgName == $imgNewName){
            $arr = array(['Ошибка', 'Файл уже содержит такое имя']);
            echo json_encode($arr);
            exit;
        }

        $path = '../'.$pathFolder.'/'.$imgName;
        $pathNew = '../'.$pathFolder.'/'.$imgNewName;

        $rename = rename($path, $pathNew);
        $arr = array(['Файл переименован', $rename]);
        echo json_encode($arr);
        exit;
    }
}