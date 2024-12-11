<?php
$pdo = require $_SERVER['DOCUMENT_ROOT'] . '/db.php';
$prodq = $pdo->prepare('SELECT products.*, sum(uchet_tovarov.amount) as amount from products left join uchet_tovarov on uchet_tovarov.product_id = products.id group by products.id');
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
            <td>amount</td>
            <td><a href="/create.php" id="create">Add new product</a></td>
            <td><a href="/postup.php" id="postup">Add arrive of product</a></td>
        </tr>
        <? foreach ($prod as $key => $pr): ?>
            <tr>
                <td><?= $prod[$key]['name'] ?></td>
                <td><?= $prod[$key]['how_much'] ?></td>
                <td><?= $prod[$key]['id'] ?></td>
                <? if ($pr['amount'] == null) {
                    $prod[$key]['amount'] = 0;
                } ?>
                <td><?= $prod[$key]['amount'] ?></td>
            </tr>
        <? endforeach ?>
    </table>
</body>

</html>