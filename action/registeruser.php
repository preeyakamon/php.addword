<?php
require_once '../database/connector.php';
$name = isset($_POST["name"]) ? $_POST["name"] : null;
$user = isset($_POST["username"]) ? $_POST["username"] : null;
$pass = isset($_POST["password"]) ? $_POST["password"] : null;
if ($name != null || $user != null || $pass != null) {
    $sql = "INSERT INTO user(name, username, password)
    VALUES('$name', '$user', '$pass')";
    $query = mysqli_query($conn, $sql);
    $data["result"] = true;
    echo json_encode($data);
}
 ?>
