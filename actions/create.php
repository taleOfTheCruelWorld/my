<?php 
 
$name = $_POST['name'];
$how_much = $_POST['how_much'];

$pdo = require $_SERVER['DOCUMENT_ROOT'] . '/db.php';

$req = $pdo->prepare('insert into products(name, how_much) values(?, ?)');
$req->execute([$name, $how_much]);

header('location: /index.php');