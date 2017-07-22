<?php
  require_once 'database/connector.php';
  $sql = "SELECT * FROM user";
  $search = isset($_GET["search"]) ? $_GET["search"] : "";
  if ($search != "") {
  $sql .= " WHERE user.username like '%$search%'";
}
  $query = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>add word</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php require_once 'header.php'; ?>

  <script type="text/javascript">
  function func_delete(id) {

    if (!confirm('Do You Want To Delete?')) {
      e.preventDefault();
      return false;
    }
    window.location.href ="action/user_delete.php?user_id=" + id
  }
  </script>
</head>
<body>
  <?php include_once 'navbar.php'; ?>
  <div class="container">
   <div class="row">
     <h2>Manager User</h2>

     <center>
     <form class="form-inline">
       <div class="form-group">
    <label for="username"></label>
    <input type="text" name="search" class="form-control" id="username" placeholder="Username" value="<?=$search;?>">
    </div>
    <button type="submit" class="btn btn-info">Search</button>
    <a href="adduser.php" class="btn btn-success">Add</a>
    </form>
    </center>

    <br/>
     <table class="table table-striped table-bordered">
      <tr class="success" >
          <td align='center'>ลำดับที่</td>
          <td align='center'>Name</td>
          <td align='center'>UserName</td>
          <td align='center'>Action</td>
      </tr>
      <?php

    $count =1;
      while ($row = mysqli_fetch_array($query)) {
        echo '<tr>';
        echo '<td align="center">'.$count.' </td>';
      //  echo '<td align="center">'.$row["user_id"].' </td>';
        echo '<td align="center">'.$row["name"].' </td>';
        echo '<td align="center">'.$row["username"].' </td>';
        $id = $row["user_id"];
        echo '<td align="center"><a href ="editformuser.php?id='.$id.'" class="btn btn-primary btn-sm" href="#" role="button">Edit</a>
              <button type="button" class="btn btn-danger btn-sm" onclick = "func_delete(\''.$row["user_id"].'\');" >Delete</a></td>';

        echo '</tr>';
        $count++;
      }
       ?>

    </table>
    </div>

   </div>
  </div>
</body>
</html>
