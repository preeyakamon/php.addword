<?php
require_once '../database/connector.php';
  $user = isset($_POST["username"]) ? $_POST["username"] : null;
  $pass = isset($_POST["password"]) ? $_POST["password"] : null;
  if ($user != null || $pass != null) {
    $sql = "SELECT * FROM user WHERE username = '$user' and password = '$pass' and status = 1 ";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($query);
    if (!empty($row)) {
      $data["result"] = true;
      $data["id"] = $row["user_id"];
      $data["name"] = $row["name"];
      $data["username"] = $row["username"];
      echo json_encode($data);
    } else {
      $data["result"] = false;
      $data["message"] = "username นี้ไม่มีในระบบ";
      echo json_encode($data);
    }
  }


 ?>
