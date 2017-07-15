<?php
  require_once 'database/connector.php';
  $id = $_GET["id"];
  $sql = "SELECT * FROM user WHERE user_id = '$id'";
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
     <h2 >Edit User</h2>
     <form class="form-horizontal" action="action/edituser.php?id=<?php echo $id;?>" method="post">
       <div class="form-group">
              <label for="user_id" class="col-sm-2 control-label">User</label>
            <div class="col-sm-3">
              <input type="id" class="form-control" readonly="readonly" id="user_id" name="user_id" value="<?php echo $row["user_id"]; ?>" placeholder="User">
            </div>
      </div>
      <div class="form-group">
             <label for="name" class="col-sm-2 control-label">Name</label>
           <div class="col-sm-3">
             <input type="name" class="form-control" id="name" name="name" value="<?php echo $row["name"]; ?>" placeholder="name">
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
            <?php
              if($row["password"] == 0) {
                ?>
                <input type="password" readonly="readonly" class="form-control" id="password" name="password" value="<?php echo $row["password"]; ?>" placeholder="password">
                <?php
              } else {
                ?>
                <input type="password" class="form-control" id="password" name="password" value="<?php echo $row["password"]; ?>" placeholder="password">
                <?php
              }
            ?>

          </div>
    </div>


   <button type="submit" class="btn btn-primary">Save</button>
        <a href="manage-users.php" class="btn btn-warning">Cancel</a>


   </div>
  </div>
</form>
</center>
</body>
</html>
