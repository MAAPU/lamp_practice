<?php
require_once '../conf/const.php';
require_once MODEL_PATH . 'functions.php';
require_once MODEL_PATH . 'user.php';
require_once MODEL_PATH . 'item.php';
require_once MODEL_PATH . 'cart.php';

session_start();

if (is_logined() === false) {
    redirect_to(LOGIN_URL);
}
$order_id = get_get('order_id');

$db = get_db_connect();
$user = get_login_user($db);

if (is_admin($user) === true) {
    $history = get_history($db, $order_id);
    $details = get_details($db, $order_id);
} else {
    $history = get_user_history($db, $order_id , $user['user_id']);
    $details = get_user_details($db, $order_id , $user['user_id']);
}

include_once VIEW_PATH . 'detail_view.php';