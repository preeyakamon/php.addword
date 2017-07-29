<?php
require_once '../database/connector.php';
$username = isset($_POST["username"]) ? $_POST["username"] : null; // short if.
$password = isset($_POST["password"]) ? $_POST["password"] : null; // short if.
$confirm = isset($_POST["confirm"]) ? $_POST["confirm"] : null; // short if.

if ($username != null || $password != null ) {
    $sql = "INSERT INTO admin (username, password)
    VALUES('$username', '$password')";


    $sql1 = "SELECT * FROM admin WHERE username = '$username'";
    $query1 = mysqli_query($conn, $sql1);

    if (mysqli_num_rows($query1) <= 0) {
      $query = mysqli_query($conn, $sql) or die('Die query');
      header("Location: http://localhost/addword/manager-admin.php");
    } else {
      echo "<script language=\"JavaScript\">";
      echo "(confirm('username ซ้ำ กรุณาลองใหม่')){history.go(-1)}";
      echo"</script>";
    }


    die();
  }
