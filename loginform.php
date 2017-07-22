
<!DOCTYPE html>
<html lang="en">
<head>
  <title>add word</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php require_once 'header.php'; ?>
</head>
<body>


  <div class="container">
      <center>
        <br/>
        <br/>
   <div class="row">
     <div class="col-md-10 col-md-offset-1 jumbotron well">
     <h2 >Log in</h2>
     <form class="form-horizontal" action="action/editadmin.php?id=<?php echo $id;?>" method="post">
       <div class="form-group">
              <label for="admin_id" class="col-sm-2 control-label">Username</label>
            <div class="col-sm-3">
              <input type="id" class="form-control" readonly="readonly" id="admin_id" name="admin_id" value="<?php echo $row["admin_id"]; ?>" placeholder="Admin">
            </div>
      </div>
      <div class="form-group">
             <label for="username" class="col-sm-2 control-label">password</label>
           <div class="col-sm-3">
             <input type="username" class="form-control" id="username" name="username" value="<?php echo $row["username"]; ?>" placeholder="username">
           </div>
     </div>
     

   <button type="submit" class="btn btn-primary">Login</button>



   </div>
  </div>
</form>
</center>
</body>
</html>
