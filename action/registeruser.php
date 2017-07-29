<?php
require_once '../database/connector.php';
$name = isset($_POST["name"]) ? $_POST["name"] : null;
$user = isset($_POST["username"]) ? $_POST["username"] : null;
$pass = isset($_POST["password"]) ? $_POST["password"] : null;
if ($name != null || $user != null || $pass != null) {
    $sql = "INSERT INTO user(name, username, password)
    VALUES('$name', '$user', '$pass')";

  $sql1 = "SELECT * FROM user WHERE username = '$user'";
    $query1 = mysqli_query($conn, $sql1);

  $data = [];
    if (mysqli_num_rows($query1) > 0) {
      $data["result"] = false;
     $data["message"] = "username ซ้ำ กรุณากรอกใหม่";
    } else {
      $data["result"] = true;
      $data["message"] = "สมัครสมาชิกเรียบร้อยแล้ว";
      $query = mysqli_query($conn, $sql);
    }
    echo json_encode($data);
}
 ?>
