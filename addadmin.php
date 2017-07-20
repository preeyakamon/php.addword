<!DOCTYPE html>
<html lang="en">
<head>
<title>addword</title>
<?php include 'header.php' ?>
</head>
<body>
  <?php include 'navbar.php' ?>
    <div class="container-fluid">

      <center>
        <br/>
        <br/>
        <div class="row">
          <div class="col-md-6 col-md-offset-3 jumbotron well">
            <h2 >Add Admin</h2>
            <form class="form-horizontal" action="action/admin_add.php" method="post">
            <div class="form-group">
            <label for="username" class="col-sm-2 control-label">Username</label>
            <div class="col-sm-10">
            <input type="id" class="form-control" id="username" name="username" placeholder="Username">
            </div>
            </div>
            <div class="form-group">
            <label for="password" class="col-sm-2 control-label">Password</label>
            <div class="col-sm-10">
            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
            </div>
            </div>



        <button type="submit" class="btn btn-primary">Save</button>
        <a href="manager-admin.php" class="btn btn-warning">Cancel</a>

      </form>
      </center>

</body>
</html>
