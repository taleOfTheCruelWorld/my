<?php
$date = $_POST['date'];
$product_id = $_POST['product'];
$amount = $_POST['amount'];

$pdo = require $_SERVER['DOCUMENT_ROOT'] . '/db.php';

$req = $pdo->prepare('insert into uchet_tovarov(date, product_id, amount) values(?, ?, ?)');
$req->execute([$date, $product_id, $amount]);

header('location: /index.php');