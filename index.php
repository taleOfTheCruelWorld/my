<?php
$pdo = require $_SERVER['DOCUMENT_ROOT'] . '/db.php';
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
</head>

<body>
    <a href="/arrivals.php" id="arr">Arrivals</a>
    <table>
        <tr>
            <td>Name</td>
            <td>Cost</td>
            <td>Article</td>
            <td><a href="/create.php" id="create">Add new product</a></td>
            <td><a href="/postup.php" id="postup">Add arrive of product</a></td>
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