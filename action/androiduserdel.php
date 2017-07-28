<?php
require_once '../database/connector.php';
  $user = isset($_POST["user_id"]) ? $_POST["user_id"] : null;
  $password = isset($_POST["password"]) ? $_POST["password"] : null;



  if ($user != null || $password != null) {
    $sql = "UPDATE user SET status = 0  WHERE user_id = $user and password = '$password' ";
    $query = mysqli_query($conn, $sql) ;
    $resp = [];
    if (mysqli_affected_rows($conn) > 0) {
      $resp["result"] = true;
    } else {
      $resp["result"] = false;
      $resp["message"] = "รหัสผ่านผิดพลาด";
    }
    echo json_encode($resp);
  }
 ?>
