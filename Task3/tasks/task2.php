<!doctype html>
<html lang="en">
<?php
$title = 'Задание #2';
require_once '../../Task1/tasks/common/_head.php'
?>
<body>
<div class="container">
    <div class="row">
        <h1>Задание 2</h1>
    </div>

    <?php
    $arr = [
        'Pencil',
        'Pen',
        [
            'Color',
            'Height'
        ]
    ];

    addJsonFile($arr);

    function addJsonFile($array) {
        $jsonEncode = json_encode($array);
        $file = fopen('files/json/output.json', 'w');
        fwrite($file, $jsonEncode);
        fclose($file);
    }

    $fileName = 'files/json/output.json';
    changeJsonFile($fileName);

    function changeJsonFile($file){
        $jsonPath = $file;
        $jsonFile = file_get_contents($jsonPath);
        $jsonArray = json_decode($jsonFile, true);


        $count = count($jsonArray);

        for ($i = 0; $i < $count; $i++){
            $count2 = count($jsonArray[$i]);

            if($count2 > 1){
                for ($b = 0; $b < $count2; $b++){
                    $random = rand(0, 1);

                    if($random == 1){
                        $jsonArray[$i][$b] = 'Changed';
                    }
                }
            }
            else{
                $random = rand(0, 1);

                if($random == 1){
                    $jsonArray[$i] = 'Changed';
                }
            }
        }
        $file = fopen('files/json/output2.json', 'w');
        fwrite($file, json_encode($jsonArray, JSON_UNESCAPED_UNICODE));
        fclose($file);
    }

    $firstFileName = 'files/json/output.json';
    $secondFileName = 'files/json/output2.json';

    comparison ($firstFileName, $secondFileName);

    function comparison ($file1, $file2){
        $jsonPath = $file1;
        $jsonPathSecond = $file2;

        $jsonFile = file_get_contents($jsonPath);
        $jsonFileSecond = file_get_contents($jsonPathSecond);

        $jsonArray = json_decode($jsonFile, true);
        $jsonArraySecond = json_decode($jsonFileSecond, true);

        $count = count($jsonArray);

        for ($i = 0; $i < $count; $i++){
            $count2 = count($jsonArray[$i]);

            if($count2 > 1){
                for ($b = 0; $b < $count2; $b++){
                    if($jsonArray[$i][$b] != $jsonArraySecond[$i][$b]){
                        echo $jsonArray[$i][$b].'&nbsp;неравен&nbsp;'.$jsonArraySecond[$i][$b].'<br/>';
                    }
                }
            }
            else{
                if($jsonArray[$i] != $jsonArraySecond[$i]){
                    echo $jsonArray[$i].'&nbsp;неравен&nbsp;'.$jsonArraySecond[$i].'<br/>';
                }
            }
        }
    }
    ?>

</div>
</body>
</html>