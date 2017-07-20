<?php
require_once '../database/connector.php';
$username = isset($_POST["username"]) ? $_POST["username"] : null; // short if.
$password = isset($_POST["password"]) ? $_POST["password"] : null; // short if.



if ($username != null || $password != null ) {
    $sql = "INSERT INTO admin (username, password)
    VALUES('$username', '$password')";
    $query = mysqli_query($conn, $sql) or die('Die query');
    header("Location: http://localhost/addword/manager-admin.php");
    die();
}
