<?php
  require_once 'database/connector.php';
  $sql = "SELECT * FROM user";
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
     <h2>Manage User</h2>

     <table class="table table-striped table-bordered">
      <tr class="success" >
          <td align='center'>ลำดับที่</td>
          <td align='center'>Name</td>
          <td align='center'>UserName</td>
          <td align='center'>Action</td>
      </tr>
      <?php

      while ($row = mysqli_fetch_array($query)) {
        echo '<tr>';
        echo '<td align="center">'.$row["user_id"].' </td>';
        echo '<td align="center">'.$row["name"].' </td>';
        echo '<td align="center">'.$row["username"].' </td>';
        $id = $row["user_id"];
        echo '<td align="center"><a href ="editformuser.php?id='.$id.'" class="btn btn-primary btn-sm" href="#" role="button">Edit</a>
              <a href ="editformlevel-time.php?id='.$id.'" class="btn btn-danger btn-sm" href="#" role="button">Delete</a></td>';

        echo '</tr>';
      }
       ?>

    </table>
    </div>

   </div>
  </div>
</body>
</html>
