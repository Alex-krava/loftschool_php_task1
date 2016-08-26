<?php
if($_POST){
    session_start();
    if(isset($_SESSION['user'])){
        $pathFolder = strip_tags($_POST['imgDir']);
        $imgName = iconv('utf-8','windows-1251',strip_tags($_POST['imgName']));

        $path = '../'.$pathFolder.'/'.$imgName;

        $unlink = unlink($path);

        $arr = array(['Файл удален', $unlink]);
        echo json_encode($arr);
        exit;
    }
}