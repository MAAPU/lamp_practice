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
                <?php foreach($histories as $history){ ?>
                <tr>
                    <td><?php print(h($history['order_id']));?></td>
                    <td><?php print(h($history['create_datetime']));?></td>
                    <td><?php print(number_format(h($history['total'])));?>円</td>
                    <td>
                        <form action="detail.php">
                            <input type="submit" value="購入明細" value="btn btn-meisai">
                            <input type="hidden" name="order_id" value="<?php print(h($cart['order_id'])); ?>">
                        </form>
                    </td>
                </tr>     
    
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>