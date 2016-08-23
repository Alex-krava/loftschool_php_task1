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
    $url = 'https://en.wikipedia.org/w/api.php?action=query&titles=Main%20Page&prop=revisions&rvprop=content&format=json';

    function curl ($url){
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        $response = curl_exec($curl);
        curl_close($curl);

        return $response;
    }

    $curl = curl ($url);

    if(!empty($curl)){
        $users = json_decode($curl, true);
        echo $users[query][pages][15580374][title]."<br/>";
        echo $users[query][pages][15580374][pageid]."<br/>";
    }
//
//

    ?>

</div>
</body>
</html>