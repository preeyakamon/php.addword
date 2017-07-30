<?php
require_once '../database/connector.php';
$user = isset($_GET["user_id"]) ? $_GET["user_id"] : null; // short if.

if ($user != null ) {
    $sql = " DELETE FROM user WHERE user_id = $user";
    $query = mysqli_query($conn, $sql) or die('Die query');
    header("Location: http://www.two-friend.com/addword/manage-users.php");
    die();
}
