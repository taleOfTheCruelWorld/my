<?php
$pdo = require $_SERVER['DOCUMENT_ROOT'] .  '/zadanie/db.php';

$products = $pdo->query('select * from products');
$products = $products->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>postuplenie tovara</h1>
    <form action="/zadanie/actions/postup.php" method="post">
        <label for="date">date</label>
        <input type="text" name="date" placeholder="y-m-d    exemple: 2024-12-12" id="date"><br>
        <label for="prod">name of product</label><select name="product" id="prod">
            <? foreach ($products as $prod): ?>
                <option value="<?= $prod['id'] ?>"><?= $prod['name'] ?></option>
            <? endforeach ?>
        </select><br>
        <a href="/zadanie/create.php">create a new product</a>
        <br>
        <label for="amount">amount of product</label>
        <input type="number" id="amount" name="amount">
        <input type="submit" id="sub">
    </form>
</body>

</html>