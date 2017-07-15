<?php
  require_once 'database/connector.php';
  $id = $_GET["id"];
  $sql = "SELECT * FROM admin WHERE admin_id = '$id'";
  $query = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($query);
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
      <center>
        <br/>
        <br/>
   <div class="row">
     <div class="col-md-10 col-md-offset-1 jumbotron well">
     <h2 >Edit Admin</h2>
     <form class="form-horizontal" action="action/editadmin.php?id=<?php echo $id;?>" method="post">
       <div class="form-group">
              <label for="admin_id" class="col-sm-2 control-label">Admin</label>
            <div class="col-sm-3">
              <input type="id" class="form-control" readonly="readonly" id="admin_id" name="admin_id" value="<?php echo $row["admin_id"]; ?>" placeholder="Admin">
            </div>
      </div>
      <div class="form-group">
             <label for="username" class="col-sm-2 control-label">Username</label>
           <div class="col-sm-3">
             <input type="username" class="form-control" id="username" name="username" value="<?php echo $row["username"]; ?>" placeholder="username">
           </div>
     </div>
     <div class="form-group">
            <label for="password" class="col-sm-2 control-label">Password</label>
          <div class="col-sm-3">
            <input type="password" class="form-control" id="password" name="password" value="<?php echo $row["password"]; ?>" placeholder="password">
          </div>
    </div>

   <button type="submit" class="btn btn-primary">Save</button>
        <a href="manager-admin.php" class="btn btn-warning">Cancel</a>


   </div>
  </div>
</form>
</center>
</body>
</html>
