<?php
    include "./db.php";
    $db = new DataBase();
    $response = $db->fetchAll("relatives");
    echo $response;
?>