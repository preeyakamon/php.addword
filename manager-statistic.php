<?php
  require_once 'database/connector.php';
  $sql = "SELECT * FROM score ";
  $search = isset($_GET["search"]) ? $_GET["search"] : "";
  if ($search != "") {
  $sql .= " WHERE score.datetime like '%$search%'";
  }
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
     <h2>Manager Statistic</h2>

     <center>
     <form class="form-inline">
       <div class="form-group">
    <label for="username"></label>
    <input type="text" name="search" class="form-control" id="username" placeholder="Datetime" value="<?=$search;?>">
    </div>
    <button type="submit" class="btn btn-info">Search</button>
    </form>
    </center>

      <br>
     <tr class="danger" >

      <table class="table table-striped table-bordered">
        <tr class="danger" >
            <td align='center'>UserID</td>
            <td align='center'>Score</td>
            <td align='center'>Totaltime</td>
            <td align='center'>Datetime</td>
        </tr>

        <?php
        while ($row = mysqli_fetch_array($query)) {
          echo '<tr>';
          echo '<td align="center">'.$row["user_id"].' </td>';
          echo '<td align="center">'.$row["score"].' </td>';
          echo '<td align="center">'.$row["totaltime"].' </td>';
          echo '<td align="center">'.$row["datetime"].' </td>';
          echo '</tr>';
        }
         ?>
      </table>
   </div>
  </div>
</body>
</html>
