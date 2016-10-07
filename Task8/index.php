<?php
require_once '../vendor/autoload.php';

use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;

$app = new \Slim\App();
$dns = 'mysql:host=localhost;dbname=loftschool;charset=utf8';
$usr = 'root';
$pwd = '';

$pdo = new \Slim\PDO\Database($dns, $usr, $pwd);
$app->get('/', function(){

});
$app->get('/{id}', function(ServerRequestInterface $req, ResponseInterface $resp, $options) use($pdo){
    $id = $req->getAttribute('id');
    $select = $pdo->select()->from('products')->where('id', '=', $id);
    $smtp = $select->execute();
    $data = $smtp->fetchAll();

    if(empty($data)){
        return $resp->withStatus(302)->withHeader('Location', '/');
    }
});

$app->run();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Домашнее задание 8</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://bootswatch.com/superhero/bootstrap.min.css">
</head>
<body>

<div class="container">
    <div class="row">
        <h1 class="title">Домашнее задание №8</h1>
    </div>
    <div class="list-group">
    </div>
</div>

<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous" defer></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" defer></script>
<script src="./assets/js/main.js" defer></script>
</body>
</html>