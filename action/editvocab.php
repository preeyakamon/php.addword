<?php
require_once '../database/connector.php';
$vocab = isset($_GET["id"]) ? $_GET["id"] : null; // short if.
$vocabname = isset($_POST["vocabulary_name"]) ? $_POST["vocabulary_name"] : null; // short if.
$translation = isset($_POST["translation"]) ? $_POST["translation"] : null; // short if.
$levelid = isset($_POST["level_id"]) ? $_POST["level_id"] : null; // short if.

if ($vocab != null || $vocabname != null || $translation != null || $levelid != null  ) {
    $sql = "UPDATE vocabulary SET  vocabulary_name = '$vocabname', translation = '$translation',  level_id = '$levelid' WHERE vocabulary_id = $vocab";
    $query = mysqli_query($conn, $sql) or die('Die query => ' . mysqli_error($conn));
    header("Location: http://localhost/addword/manager-vocab.php");
    die();
}
