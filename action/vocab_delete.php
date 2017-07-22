<?php
require_once '../database/connector.php';
$vocab = isset($_GET["vocabulary_id"]) ? $_GET["vocabulary_id"] : null; // short if.

if ($vocab != null ) {
    $sql = " DELETE FROM vocabulary WHERE vocabulary_id = $vocab";
    $query = mysqli_query($conn, $sql) or die('Die query');
    header("Location: http://localhost/addword/manager-vocab.php");
    die();
}
