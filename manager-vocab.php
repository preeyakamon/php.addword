<?php
  require_once 'database/connector.php';
  $sql = "SELECT * FROM vocabulary";
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
     <h2>Manager Vocabulary</h2>
      <table class="table table-striped table-bordered">
        <tr class="danger" >
            <td align='center'>Vocabulary_id</td>
            <td align='center'>Vocabulary_Name</td>
            <td align='center'>Translation</td>
            <td align='center'>Level_id</td>
            <td align='center'>Action</td>
        </tr>
        <?php

        while ($row = mysqli_fetch_array($query)) {
          echo '<tr>';
          echo '<td align="center">'.$row["vocabulary_id"].' </td>';
          echo '<td align="center">'.$row["vocabulary_name"].' </td>';
          echo '<td align="center">'.$row["translation"].' </td>';
          echo '<td align="center">'.$row["level_id"].' </td>';
          $id = $row["vocabulary_id"];
          echo '<td align="center"><button class="btn btn-default" type="submit">Edit</button>
                <button class="btn btn-default" type="submit">Delete</button></td>';

          echo '</tr>';
        }
         ?>

      </table>
   </div>
  </div>
</body>
</html>
