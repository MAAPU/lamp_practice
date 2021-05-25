<!DOCTYPE html>
<html lang="ja">
<head>
    <?php include VIEW_PATH . 'templates/head.php'; ?>
    <title>購入明細</title>
</head>
<body>
    <?php include VIEW_PATH . 'templates/header_logined.php';?>
    <h1>購入明細</h1>
    <div class="container">
        <?php include VIEW_PATH . 'templates/messages.php';?>
        
        <?php foreach($carts as $cart){?>
            <tr>
                <th>注文番号</th>
                <th>購入日時</th>
                <th>合計金額</th>
            </tr>
            <tr>
                <td><?php print(h($cart['order_id']));?></td>
                <td><?php print(h($cart['create_datetime']));?></td>
                <td><?php print number_format($total_price); ?>円</td>
                <td>
            </tr>
            <table border="1">
                <tr>
                    <th>商品名</th>
                    <th>商品価格</th>
                    <th>購入数</th>
                    <th>小計</th>
                </tr> 
                <tr>
                    <td><?php print(h($cart['name']));?></td>
                    <td><?php print(number_format(h($cart['price']))); ?>円</td>
                    <td><?php print(h($cart['amount'])); ?>個</td>
                    <td><?php print(h(number_format($cart['price'] * $cart['amount']))); ?>円</td>
                </tr>
            </table>
        <?php } ?>
    </div>
</body>
</html>
           