<?php
require_once '../database/connector.php';
  $sqlLevel = "SELECT max(test) as number FROM level" ;
  $queryLevle = mysqli_query($conn, $sqlLevel);
  $rowLevel = mysqli_fetch_assoc($queryLevle);

  $sqlStep = "SELECT * FROM level WHERE level_id <> 0 Order by test desc" ;
  $queryStep = mysqli_query($conn, $sqlStep);
  $stepArray = array();
  while ($rowStep = mysqli_fetch_array($queryStep)) {
    $step = [];
    $step["level_id"] = $rowStep["level_id"];
    $step["number"] = $rowStep["test"];
    array_push($stepArray, $step);
  }

  $sql0 = "SELECT second, hidden_char, name FROM level WHERE level_id=0" ;
  $query0 = mysqli_query($conn, $sql0);
  $row0 = mysqli_fetch_assoc($query0);
  $second = $row0["second"];
  $hidden_char = $row0["hidden_char"];
  $name = $row0["name"];
  if (!empty($rowLevel)) {
    $maxtest = $rowLevel["number"];//เก็บค่าสูงสุด
    $sqltest = "SELECT * FROM vocabulary LEFT JOIN level on vocabulary.level_id = level.level_id ORDER BY RAND() LIMIT $maxtest";
    $querytest = mysqli_query($conn, $sqltest);
    $resp = [];
    $resp["result"] = true;
    $resp["name"] = $name;
    $resp["max_answer"] = $maxtest;
    $resp["second"] = $second;
    $resp["hidden_char"] = $hidden_char;
    $resp["step"] = $stepArray;
    $data = array();
    while ($rowtest = mysqli_fetch_array($querytest)) {
      $item = [];
      $item["vocab_id"] = $rowtest["vocabulary_id"];
      $item["vocab_name"] = $rowtest["vocabulary_name"];
      $item["translation"] = $rowtest["translation"];


      array_push($data, $item);
    }
    $resp["data"] = $data;
    echo json_encode($resp);
  }else {
    $resp["result"] = false;
      echo json_encode($resp);
  }
 ?>
