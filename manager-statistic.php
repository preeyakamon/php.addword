<?php
  require_once 'database/connector.php';
  $sql = "SELECT * FROM score LEFT JOIN user on user.name, user.username, scor.tataltime, scor.datatime";
  $search = isset($_GET["search"]) ? $_GET["search"] : "";
  if ($search != "") {
  $sql .= " WHERE admin.username like '%$search%'";
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
    <input type="text" name="search" class="form-control" id="username" placeholder="Username" value="<?=$search;?>">
    </div>
    <button type="submit" class="btn btn-info">Search</button>
    </form>
    </center>

      <br>
     <tr class="danger" >

      <table class="table table-striped table-bordered">
        <tr class="danger" >
            <td align='center'>Name</td>
            <td align='center'>Username</td>
            <td align='center'>Totaltime</td>
            <td align='center'>Datatime</td>
        </tr>

      </table>
   </div>
  </div>
</body>
</html>
