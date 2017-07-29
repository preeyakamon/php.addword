<!DOCTYPE html>
<html lang="en">
<head>
<title>addword</title>
<?php include 'header.php' ?>


<script>
  $(document).ready(function(){
    $('#btnAdd').on('click', function(){
      var password = $('#password').val();
      var confirm = $('#confirm').val();
      if (password != confirm) {
        alert("Not match");
        $('#password').val('');
        $('#confirm').val('');
      } else {
        $('form').submit();
      }
    })
  })
</script>
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
            <div class="form-group">
            <label for="confirm" class="col-sm-2 control-label">Confirm</label>
            <div class="col-sm-10">
            <input type="password" class="form-control" id="confirm" name="confirm" placeholder="Confirm-Password">
            </div>
            </div>




        <button id="btnAdd" type="button" class="btn btn-primary">Save</button>
        <a href="manager-admin.php" class="btn btn-warning">Cancel</a>

      </form>
      </center>

</body>
</html>
