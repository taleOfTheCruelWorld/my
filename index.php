<?php
$pdo = require $_SERVER['DOCUMENT_ROOT'] . '/zadanie/db.php';
$prodq = $pdo->prepare('select * from products');
$prodq->execute();
$prod = $prodq->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <a href="/zadanie/arrivals.php" id="arr">Arrivals</a>
    <table>
        <tr>
            <td>Name</td>
            <td>Cost</td>
            <td>Article</td>
            <td><a href="/zadanie/create.php" id="create">Add new product</a></td>
            <td><a href="/zadanie/postup.php" id="postup">Add arrive of product</a></td>
        </tr>
        <? foreach ($prod as $pr): ?>
            <tr>
                <td><?= $pr['name'] ?></td>
                <td><?= $pr['how_much'] ?></td>
                <td><?= $pr['id'] ?></td>
            </tr>
        <? endforeach ?>
    </table>
</body>

</html>