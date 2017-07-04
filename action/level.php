<?php
require_once '../database/connector.php';
  $level = isset($_POST["level_id"]) ? $_POST["level_id"] : null;
  if ($level != null) {
      $sqlplay = "SELECT * FROM level WHERE level_id = $level";
      $queryplay = mysqli_query($conn, $sqlplay);
      $rowplay = mysqli_fetch_assoc($queryplay);
      if (!empty($rowplay)) {
        $number = $rowplay["number_answer"]* 10;
        $sqlplay1 = "SELECT vocabulary_id, vocabulary_name, translation FROM vocabulary WHERE level_id = $level ORDER BY RAND() LIMIT $number" ;
        $querplay1= mysqli_query($conn, $sqlplay1);
        $data["result"] = true;
        $data["level"] = $rowplay["level_id"];
        $data["name"] = $rowplay["name"];
        $data["number_answer"] = $rowplay["number_answer"];
        $data["hidden_char"] = $rowplay["hidden_char"];
        $data["second"] = $rowplay["second"];

        $vocab = array();
        while ($rowplay1 = mysqli_fetch_array($querplay1)) {
          $item = [];
          $item["vocab_id"] = $rowplay1["vocabulary_id"];
          $item["vocab_name"] = $rowplay1["vocabulary_name"];
          $item["translation"] = $rowplay1["translation"];

          array_push($vocab, $item);
        }
        $data["data"] = $vocab;
        echo json_encode($data);
      }

      }else {
        $data["result"] = false;
        $data["message"] = "ไม่มีค่าจาก testlevel";
        echo json_encode($data);
  }





 ?>
