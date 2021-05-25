<!DOCTYPE html>
<html lang="ja">
<head>
    <?php include VIEW_PATH . 'templates/head.php'; ?>
    <title>購入履歴</title>
</head>
<body>
    <?php include VIEW_PATH . 'templates/header_logined.php';?>
    <h1>購入履歴</h1>
    <div class="container">
        <?php include VIEW_PATH . 'templates/messages.php';?>
        <table border="1">
            <?php foreach($carts as $cart){?>
            <tr>
                <th>注文番号</th>
                <th>購入日時</th>
                <th>合計金額</th>
            </tr>
                <td><?php print(h($cart['order_id']));?></td>
                <td><?php print(h($cart['create_datetime']));?></td>
                <td><?php print(number_format(h($cart['price']*$cart['amount'])));?>円</td>
                <td>
                    <form method="post" action="detail.php">
                        <input type="submit" value="購入明細" value="btn btn-meisai">
                        <input type="hidden" name="token" value="<?php print $token;?>">
                        <input type="hidden" name="user_id" value="<?php print(h($cart['user_id'])); ?>">
                    </form>
                </td>
           </tr>     
        </table>
        <?php } ?>
    </div>
</body>
</html>