<?php
require_once '../conf/const.php';
require_once MODEL_PATH . 'function.php';

session_start();

if(is_logined() === false){
    redirect_to(LOGIN_URL);
}

include_once '../view/history_view.php';