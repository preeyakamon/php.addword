<?php
session_start();
require_once '../database/connector.php';
$user = isset($_POST["username"]) ? $_POST["username"] : null; // short if.
$pass = isset($_POST["password"]) ? $_POST["password"] : null; // short if.


if ($user != null || $pass != null) {
    $sql = "SELECT * FROM admin WHERE username = '$user' and password = '$pass'";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($query);
    if (!empty($row)) {
        $id = $row["admin_id"];
        $name = $row["username"];
        $_SESSION["login_id"] = $id;
        $_SESSION["login_name"] = $name;
        header("Location: http://www.two-friend.com/addword/manage-users.php");
        die();
    } else {
        header("Location: http://www.two-friend.com/addword/manage-users.php");
        die();
    }
}
