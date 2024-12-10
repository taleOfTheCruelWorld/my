<?php
$pdo = require $_SERVER['DOCUMENT_ROOT'] . '/zadanie/db.php';
$prodq = $pdo->prepare('select uchet_tovarov.amount, uchet_tovarov.date, products.name as product_name  from uchet_tovarov left join products on uchet_tovarov.product_id = products.id ');
$prodq->execute();
$prod= $prodq->fetchAll(PDO::FETCH_ASSOC);
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
     <table>
         <a href="/zadanie/index.php">Home</a>
        <tr><td>Name</td><td>Amount</td><td>Date</td>></tr>
        <?foreach($prod as $pr):?>
           <tr>
           <td><?=$pr['product_name']?></td>
           <td><?=$pr['amount']?></td>
           <td><?=$pr['date']?></td>
           </tr> 
        <?endforeach?>
     </table> 
    </body>
</html>
