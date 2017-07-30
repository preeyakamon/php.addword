<?php
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>addword</title>
<?php include 'header.php' ?>
</head>
<body style="background-img: url("paper.gif")">



  <br/>
  <br/>
  <br/>

      <div class="row">

        <div class="col-md-4 col-md-offset-4">
          <form class="form-horizontal" action="action/loginweb.php" method="post">
            <div class="row">
              <h2 align = 'center'> Login</h2>
            <br/>
              <div class="form-group">
              <label for="username" class="col-sm-2 control-label">Username</label>
              <div class="col-sm-8">
              <input type="text" class="form-control" id="username" name="username" placeholder="Username">
              </div>
              </div>
              <div class="form-group">
              <label for="password" class="col-sm-2 control-label">Password</label>
              <div class="col-sm-8">
              <input type="password" class="form-control" id="password" name="password" placeholder="Password">
              </div>
              </div>
              <div class="form-group">
              <div class="col-xs-12" align="center">
              <button type="submit" class="btn btn-success">Login</button>
              </div>
              </div>
          </form>
        </div>
      </div>
    </div>
</body>
</html>
