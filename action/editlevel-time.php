<?php
require_once '../database/connector.php';
$level = isset($_GET["id"]) ? $_GET["id"] : null; // short if.
$hidden = isset($_POST["hidden_char"]) ? $_POST["hidden_char"] : null; // short if.
$number = isset($_POST["number_answer"]) ? $_POST["number_answer"] : null; // short if.
$second = isset($_POST["second"]) ? $_POST["second"] : null; // short if.

if ($level != null || $hidden != null || $number != null || $second != null ) {
    $sql = "UPDATE level SET  hidden_char = '$hidden', number_answer = '$number', second = '$second' WHERE level_id = $level";
    $query = mysqli_query($conn, $sql) or die('Die query => ' . mysqli_error($conn));
    header("Location: http://localhost/addword/manager-Level-Time.php");
    die();
}
