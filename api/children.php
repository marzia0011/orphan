<?php
    include "./db.php";
    $db = new DataBase();
    $response = $db->fetchAll("child");
    echo $response;
?>