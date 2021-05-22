<!DOCTYPE html>
<html lang="ja">
<head>
    <?php include VIEW_PATH . 'templates/head.php'; ?>
    <title>購入履歴</title>
</head>
<body>
    <?php include VIEW_PATH . 'templates/header_logined';?>
    <h1>購入履歴</h1>
    <div class="container">
        <?php include VIEW_PATH . 'template/messages.php';?>
        <table border="1">
            <?php foreach($carts as $cart){?>
           <tr>
                <td><?php print(h($cart['user_id']));?></td>
                <td><?php print(h($cart['create_datetime']));?></td>
           </tr>     
        </table>
        <?php } ?>
    </div>
</body>
</html>