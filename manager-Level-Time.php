<?php
  require_once 'database/connector.php';
  $sql = "SELECT * FROM level";
  $query = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>add word</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php require_once 'header.php'; ?>
</head>
<body>
  <?php include_once 'navbar.php'; ?>
  <div class="container">
   <div class="row">
     <h2>Manager Level and Time</h2>

     <table class="table table-striped table-bordered">
       <tr class="info" >
           <td align='center'>Level</td>
           <td align='center'>name</td>
           <td align='center'>จำนวนคำที่ซ่อน</td>
           <td align='center'>Number_answer</td>
           <td align='center'>TestLevel</d>
           <td align='center'>Second</td>
           <td align='center'>Action</td>
       </tr>
       <?php

       while ($row = mysqli_fetch_array($query)) {
         echo '<tr>';
         echo '<td align="center">'.$row["level_id"].' </td>';
         echo '<td align="center">'.$row["name"].' </td>';
         echo '<td align="center">'.$row["hidden_char"].' </td>';
         echo '<td align="center">'.$row["number_answer"].' </td>';
         echo '<td align="center">'.$row["test"].' </td>';
         echo '<td align="center">'.$row["second"].' </td>';
         $id = $row["level_id"];
         echo '<td align="center"><a href ="editformlevel-time.php?id='.$id.'" class="btn btn-primary btn-sm" href="#" role="button">Edit</a></td>';
         echo '</tr>';
       }
        ?>


     </table>
   </div>
  </div>
</body>
</html>
