<?php
require_once '../database/connector.php';
$vocabulary_name = isset($_POST["vocabulary_name"]) ? $_POST["vocabulary_name"] : null; // short if.
$translation = isset($_POST["translation"]) ? $_POST["translation"] : null; // short if.
$level_id = isset($_POST["level_id"]) ? $_POST["level_id"] : null; // short if.


if ($vocabulary_name != null || $translation != null || $level_id != null ) {
    $sql = "INSERT INTO vocabulary (vocabulary_name, translation, level_id)
    VALUES('$vocabulary_name', '$translation', '$level_id' )";
    $query = mysqli_query($conn, $sql) or die('Die query');
    header("Location: http://www.two-friend.com/addword/manager-vocab.php");
    die();
}
