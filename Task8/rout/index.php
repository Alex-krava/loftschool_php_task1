<?php
require_once '../../vendor/autoload.php';

use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;

$app = new \Slim\App();
$dns = 'mysql:host=localhost;dbname=loftschool;charset=utf8';
$usr = 'root';
$pwd = '';

$pdo = new \Slim\PDO\Database($dns, $usr, $pwd);

$app->get('/products', function(ServerRequestInterface $req, ResponseInterface $resp, $options) use($pdo){
    $select = $pdo->select()->from('products');
    $smtp = $select->execute();
    $data = $smtp->fetchAll();

    echo json_encode($data);
});

$app->get('/products/{id}', function(ServerRequestInterface $req, ResponseInterface $resp, $options) use($pdo){
    $id = $req->getAttribute('id');
    $select = $pdo->select()->from('products')->where('id', '=', $id);
    $smtp = $select->execute();
    $data = $smtp->fetchAll();

    echo json_encode($data);

});

$app->run();