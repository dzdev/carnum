<?php
if(!defined('IN_DISCUZ')) {
    die('Access Denied');
}

$setting = $_G['cache']['plugin']['carnum'];   // inital vars
$action = trim($_G['gp_action']);
if(empty($action)) {
    echo 'please choice the action';
}
?>