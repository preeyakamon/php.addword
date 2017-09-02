<?php
  require_once 'database/connector.php';
  $id = $_GET["id"];
  $sql = "SELECT * FROM vocabulary WHERE vocabulary_id = '$id'";
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
     <h2 >Edit Vocabulary</h2>
     <form class="form-horizontal" action="action/editvocab.php?id=<?php echo $id;?>" method="post">
       <div class="form-group">
              <label for="vocabulary_id" class="col-sm-2 control-label">ลำดับ</label>
            <div class="col-sm-3">
              <input type="id" class="form-control" readonly="readonly" id="vocabulary_id" name="vocabulary_id" value="<?php echo $row["vocabulary_id"]; ?>" placeholder="vocabulary">
            </div>
      </div>
      <div class="form-group">
             <label for="vocabulary_name" class="col-sm-2 control-label">คำศัพท์</label>
           <div class="col-sm-3">
             <input type="vocabulary_name" class="form-control" id="vocabulary_name" name="vocabulary_name" value="<?php echo $row["vocabulary_name"]; ?>" placeholder="vocabulary_name">
           </div>
     </div>
      <div class="form-group">
             <label for="translation" class="col-sm-2 control-label">คำแปล</label>
           <div class="col-sm-3">
             <input type="translation" class="form-control" id="translation" name="translation" value="<?php echo $row["translation"]; ?>" placeholder="translation">
           </div>
     </div>
     <div class="form-group">
            <label for="level_id" class="col-sm-2 control-label">Level_id</label>
          <div class="col-sm-3">
            <input type="level_id" class="form-control" id="level_id" name="level_id" value="<?php echo $row["level_id"]; ?>" placeholder="level_id">
          </div>
    </div>



   <button type="submit" class="btn btn-primary">Save</button>
        <a href="manager-vocab.php" class="btn btn-warning">Cancel</a>


   </div>
  </div>
</form>
</center>
</body>
</html>
