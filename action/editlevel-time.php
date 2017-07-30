<?php
require_once '../database/connector.php';
$level = isset($_GET["id"]) ? $_GET["id"] : null; // short if.
$name = isset($_POST["name"]) ? $_POST["name"] : null; // short if.
$hidden = isset($_POST["hidden_char"]) ? $_POST["hidden_char"] : null; // short if.
$number = isset($_POST["number_answer"]) ? $_POST["number_answer"] : null; // short if.
$test = isset($_POST["test"]) ? $_POST["test"] : null; // short if.
$second = isset($_POST["second"]) ? $_POST["second"] : null; // short if.

if ($level != null || $name != null || $hidden != null || $number != null || $test != null || $second != null ) {
    $sql = "UPDATE level SET  name = '$name', hidden_char = '$hidden',  number_answer = '$number', test = '$test', second = '$second' WHERE level_id = $level";
    $query = mysqli_query($conn, $sql) or die('Die query => ' . mysqli_error($conn));
    header("Location: http://www.two-friend.com/addword/manager-Level-Time.php");
    die();
}
