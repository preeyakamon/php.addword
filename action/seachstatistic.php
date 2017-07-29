<?php
require_once '../database/connector.php';
  $keyword = isset($_POST["search"]) ? $_POST["search"] : null;


  $sql = "select * from score s, user u
  WHERE s.user_id = u.user_id and (u.username like '%$keyword%' or s.datetime like '%$keyword%') order by s.score DESC";
  $query = mysqli_query($conn, $sql);
  $data = array();
  while ($row = mysqli_fetch_assoc($query)) {
    array_push($data, $row);
  }
  echo json_encode($data);
 ?>
