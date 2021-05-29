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
        <table class="table table-bordered">
            <thead class="thead-light">
                <tr>
                    <th>注文番号</th>
                    <th>購入日時</th>
                    <th>合計金額</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($history as $story){?>
                <tr>
                    <td><?php print(h($story['order_id']));?></td>
                    <td><?php print(h($story['create_datetime']));?></td>
                    <td><?php print(number_format(h($story['total'])));?>円</td>
                    <td>
                </tr>
        
                <?php } ?>
        </table>
        <table class="table table-bordered">
            <thead class="thead-light">

                <tr>
                    <th>商品名</th>
                    <th>商品価格</th>
                    <th>購入数</th>
                    <th>小計</th>
                </tr> 
                <?php foreach($details as $detail){?>

                    <tr>
                        <td><?php print(h($detail['name']));?></td>
                        <td><?php print(number_format(h($detail['price']))); ?>円</td>
                        <td><?php print(h($detail['amount'])); ?>個</td>
                        <td><?php print(h(number_format($detail['subtotal']))); ?>円</td>
                    </tr>
            
                <?php } ?>
            </tbody>
            
        </table>
    </div>
</body>
</html>
           