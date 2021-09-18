<?php
    include "./db.php";
    $db = new DataBase();
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $mobile = $_REQUEST['mobile'];
    $medium = $_REQUEST['medium'];
    $account = $_REQUEST['account'];
    $amount = $_REQUEST['amount'];
    $response = $db->donate($name, $email, $mobile, $medium, $account, $amount);
    echo $response;
?>