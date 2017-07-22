<?php
require_once '../database/connector.php';
  $user = isset($_POST["user_id"]) ? $_POST["user_id"] : null;
  $score = isset($_POST["score"]) ? $_POST["score"] : null;
  $level_id = isset($_POST["level_id"]) ? $_POST["level_id"] : null;
  $totaltime = isset($_POST["totaltime"]) ? $_POST["totaltime"] : null;

  if ($user != null || $score != null|| $level_id != null|| $totaltime != null) {
    $sql = "INSERT INTO score (user_id, score ,level_id ,totaltime) values ($user, $score, $level_id, $totaltime)";
    $query = mysqli_query($conn, $sql) ;

  }
 ?>
