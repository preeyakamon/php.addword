<?php
  require_once 'database/connector.php';
  $sql = "SELECT * FROM admin";
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
     <h2>Manager Admin</h2>

     <center>
     <form class="form-inline">
       <div class="form-group">
    <label for="username"></label>
    <input type="text" name="search" class="form-control" id="username" placeholder="Username" value="<?=$search;?>">
    </div>
    <button type="submit" class="btn btn-info">Search</button>
    <a href="addadmin.php" class="btn btn-success">Add</a>
    </form>
    </center>

      <br>
     <table class="table table-striped table-bordered">
      <tr class="success" >
          <td align='center'>ลำดับที่</td>
          <td align='center'>UserName</td>
          <td align='center'>Action</td>
      </tr>
      <?php

      while ($row = mysqli_fetch_array($query)) {
        echo '<tr>';
        echo '<td align="center">'.$row["admin_id"].' </td>';
        echo '<td align="center">'.$row["username"].' </td>';
        $id = $row["admin_id"];
        echo '<td align="center"><a href ="editformadmin.php?id='.$id.'" class="btn btn-primary btn-sm" href="#" role="button">Edit</a>
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
