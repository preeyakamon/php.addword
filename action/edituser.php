<?php
require_once '../database/connector.php';
$user = isset($_GET["id"]) ? $_GET["id"] : null; // short if.
$name = isset($_POST["name"]) ? $_POST["name"] : null; // short if.
$username = isset($_POST["username"]) ? $_POST["username"] : null; // short if.
$password = isset($_POST["password"]) ? $_POST["password"] : null; // short if.

if ($user != null || $name != null || $username != null || $password != null  ) {
    $sql = "UPDATE user SET  name = '$name', username = '$username',  password = '$password' WHERE user_id = $user";
    $query = mysqli_query($conn, $sql) or die('Die query => ' . mysqli_error($conn));
    header("Location: http://www.two-friend.com/addword/manage-users.php");
    die();
}
