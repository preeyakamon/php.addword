<?php
require_once '../database/connector.php';
$admin = isset($_GET["id"]) ? $_GET["id"] : null; // short if.
$username = isset($_POST["username"]) ? $_POST["username"] : null; // short if.
$password = isset($_POST["password"]) ? $_POST["password"] : null; // short if.

if ($user != null || $username != null || $password != null ) {
    $sql = "UPDATE admin SET username = '$username',  password = '$password' WHERE admin_id = $admin";
    $query = mysqli_query($conn, $sql) or die('Die query => ' . mysqli_error($conn));
    header("Location: http://www.two-friend.com/addword/manager-admin.php");
    die();
}
