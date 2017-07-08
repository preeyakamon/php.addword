<?php
  require_once 'database/connector.php';
  $id = $_GET["id"];
  $sql = "SELECT * FROM level WHERE level_id = '$id'";
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
     <h2 >Edit Form</h2>
     <form class="form-horizontal" action="action/editlevel-time.php?id=<?php echo $id;?>" method="post">
       <div class="form-group">
              <label for="level_id" class="col-sm-2 control-label">Level</label>
            <div class="col-sm-3">
              <input type="id" class="form-control" readonly="readonly" id="level_id" name="level_id" value="<?php echo $row["level_id"]; ?>" placeholder="Level">
            </div>
      </div>
      <div class="form-group">
             <label for="name" class="col-sm-2 control-label">Name</label>
           <div class="col-sm-3">
             <input type="name" class="form-control" id="name" name="name" value="<?php echo $row["name"]; ?>" placeholder="name">
           </div>
     </div>
      <div class="form-group">
             <label for="hidden_char" class="col-sm-2 control-label">Hiddenchar</label>
           <div class="col-sm-3">
             <input type="hidden_char" class="form-control" id="hidden_char" name="hidden_char" value="<?php echo $row["hidden_char"]; ?>" placeholder="hidden_char">
           </div>
     </div>
     <div class="form-group">
            <label for="number_answer" class="col-sm-2 control-label">Numberanswer</label>
          <div class="col-sm-3">
            <?php
              if($row["number_answer"] == 0) {
                ?>
                <input type="number_answer" readonly="readonly" class="form-control" id="number_answer" name="number_answer" value="<?php echo $row["number_answer"]; ?>" placeholder="number_answer">
                <?php
              } else {
                ?>
                <input type="number_answer" class="form-control" id="number_answer" name="number_answer" value="<?php echo $row["number_answer"]; ?>" placeholder="number_answer">
                <?php
              }
            ?>

          </div>
    </div>
    <div class="form-group">
           <label for="second" class="col-sm-2 control-label">Second</label>
         <div class="col-sm-3">
           <input type="second" class="form-control" id="second" name="second" value="<?php echo $row["second"]; ?>" placeholder="second">
         </div>
   </div>

   <button type="submit" class="btn btn-primary">Save</button>
        <a href="manager-Level-Time.php" class="btn btn-warning">Cancel</a>


   </div>
  </div>
</form>
</center>
</body>
</html>
