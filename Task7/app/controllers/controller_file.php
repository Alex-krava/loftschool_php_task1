<?php
use Intervention\Image\ImageManagerStatic as Image;

class Controller_File extends Controller {

    function __construct()
    {
        $this->view = new View();

        if(isset($_FILES)){
            session_start();
            if(isset($_SESSION['user'])){
                $file = getimagesize($_FILES['personalPhoto']['tmp_name']);
                if($file['mime'] != 'image/png' && $file['mime'] != 'image/jpeg') {
                    echo "<p style='color:red; text-align: center'>Допустимые файлы расширения .png и .jpeg</p>";
                    echo '<meta http-equiv="refresh" content="2; url=/settings"/>';
                    exit;
                }
                $file = $_FILES['personalPhoto'];
                $dir = 'photos';

                if(!file_exists($dir)){
                    mkdir($dir, 0777);
                }
                $fileName = iconv('utf-8','windows-1251',$file['name']);
                $fileName = str_replace(" ","_",$fileName);
                $file_name = $dir.'/'.$fileName;

                if(move_uploaded_file($file['tmp_name'], $file_name)){
                    Image::make($file_name)->resize(480,480)->save();

                    echo "<p style='color:green; text-align: center'>Файл сохранен</p>";
                    echo '<meta http-equiv="refresh" content="2; url=/settings"/>';
                    exit;
                }else{
                    echo "<p style='color:red; text-align: center'>Возникла ошибка при загрузки</p>";
                    echo '<meta http-equiv="refresh" content="2; url=/settings"/>';
                    exit;
                }
            }
        }
        else{
            exit;
        }
    }
}



