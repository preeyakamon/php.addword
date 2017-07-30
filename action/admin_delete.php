<?php
require_once '../database/connector.php';
$admin = isset($_GET["admin_id"]) ? $_GET["admin_id"] : null; // short if.

if ($admin != null ) {
    $sql = " DELETE FROM admin WHERE admin_id = $admin";
    $query = mysqli_query($conn, $sql) or die('Die query');
    header("Location: http://www.two-friend.com/addword/manager-admin.php");
    die();
}
