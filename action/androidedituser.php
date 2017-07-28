<?php
require_once '../database/connector.php';
  $user = isset($_POST["user_id"]) ? $_POST["user_id"] : null;
  $name = isset($_POST["name"]) ? $_POST["name"] : null;
  $password = isset($_POST["password"]) ? $_POST["password"] : null;
  $newpassword = isset($_POST["newpassword"]) ? $_POST["newpassword"] : null;

  if ($name != null|| $password != null || $user != null || $newpassword != null) {
    $sql = "UPDATE user SET ";
    if ($name != "") {
      $sql .= " name = '$name' ";
    }
    if ($name != "" && $newpassword != "") {
      $sql .= ", password = '$newpassword' ";
    } else {
      $sql .= " password = '$newpassword' ";
    }
    $sql .= " WHERE user_id = $user and password = '$password'";
    $query = mysqli_query($conn, $sql) ;
    echo $sql;
  }

 ?>
