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
            <h2 >Add Vocabury</h2>
            <form class="form-horizontal" action="action/vocab_add.php" method="post">
              <div class="form-group">
              <label for="vocabulary_name" class="col-sm-2 control-label">vocabulary</label>
              <div class="col-sm-10">
              <input type="id" class="form-control" id="vocabulary_name" name="vocabulary_name" placeholder="vocabulary_name">
              </div>
              </div>
            <div class="form-group">
            <label for="translation" class="col-sm-2 control-label">Translation</label>
            <div class="col-sm-10">
            <input type="translation" class="form-control" id="translation" name="translation" placeholder="Translation">
            </div>
            </div>
            <div class="form-group">
            <label for="level_id" class="col-sm-2 control-label">Level</label>
            <div class="col-sm-10">
            <input type="level" class="form-control" id="level_id" name="level_id" placeholder="Level">
            </div>
            </div>


        <button type="submit" class="btn btn-primary">Save</button>
        <a href="manager-vocab.php" class="btn btn-warning">Cancel</a>

      </form>
      </center>

</body>
</html>
