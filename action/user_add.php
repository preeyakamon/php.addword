<?php
require_once '../database/connector.php';
$name = isset($_POST["name"]) ? $_POST["name"] : null; // short if.
$username = isset($_POST["username"]) ? $_POST["username"] : null; // short if.
$password = isset($_POST["password"]) ? $_POST["password"] : null; // short if.


if ($name != null || $username != null || $password != null ) {
    $sql = "INSERT INTO user (name, username, password)
    VALUES('$name', '$username', '$password' )";
    $query = mysqli_query($conn, $sql) or die('Die query');
    header("Location: http://www.two-friend.com/addword/manage-users.php");
    die();
}
