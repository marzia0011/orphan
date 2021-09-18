<?php
class DataBase {
  
  function fetchAll($type) {
    $mysqli = new mysqli("localhost","root","","orphan_children");
    if ($mysqli -> connect_errno) {
      echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
      exit();
    }
    if ($type == "child") $sql = "SELECT * FROM children";
    else $sql = "SELECT * FROM relatives";
    $poems = array();
    $result = $mysqli -> query($sql);
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        $poems[] = $row;
      }
    }
    $response = new stdClass();
    $response->data = $poems;
    $mysqli -> close();
    return json_encode($response, JSON_UNESCAPED_UNICODE);
  }

  function donate($name, $email, $mobile, $medium, $account, $amount) {
    $mysqli = new mysqli("localhost","root","","orphan_children");
    if ($mysqli -> connect_errno) {
      echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
      exit();
    }
    $sql = "INSERT INTO donations (name, email, mobile, medium, account, amount) VALUES ('$name', '$email', '$mobile', '$medium', '$account', '$amount')";
    $response = "";
    if ($mysqli->query($sql) === TRUE) {
      $response = "New record created successfully";
    } else {
      $response = $mysqli->error;
    }
    $mysqli -> close();
    return $response;
  }
}
?>