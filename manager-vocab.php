<?php
  require_once 'database/connector.php';
  $page = isset($_GET["page"]) ? $_GET["page"] : 1;
  $page -= 1;
  $numberDisplay = 50;
  $start = $page * $numberDisplay;
    $search = isset($_GET["search"]) ? $_GET["search"] : "";
  $sql = "SELECT * FROM vocabulary WHERE vocabulary.vocabulary_name like '%$search%' or vocabulary.translation like '%$search%' LIMIT $start, $numberDisplay";
  $query = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>addword</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php require_once 'header.php'; ?>
  <script type="text/javascript">
  function func_delete(id) {

    if (!confirm('Do you want to delete?')) {
      e.preventDefault();
      return false;
    }
    window.location.href ="action/vocab_delete.php?vocabulary_id=" + id
  }
  </script>
</head>
<body>
  <?php include_once 'navbar.php'; ?>
  <div class="container">
   <div class="row">
     <h2>Manager Vocabulary</h2>
     <tr class="warning" >

       <center>
       <form class="form-inline">
         <div class="form-group">
      <label for="vocabulary_name"></label>
      <input type="text" name="search" class="form-control" id="vocabulary_name" placeholder="Vocabularyname,Translation" value="<?=$search;?>">
      </div>
      <button type="submit" class="btn btn-info">Search</button>
      <a href="addvocab.php" class="btn btn-success">Add</a>
      </form>
      </center>

        <br>
      <table class="table table-striped table-bordered">
        <tr class="warning" >
            <td align='center'>Vocabulary_id</td>
            <td align='center'>Vocabulary_Name</td>
            <td align='center'>Translation</td>
            <td align='center'>Level_id</td>
            <td align='center'>Action</td>
        </tr>
        <?php


        while ($row = mysqli_fetch_array($query)) {
          echo '<tr>';
          echo '<td align="center">'.$row["vocabulary_id"].' </td>';
          echo '<td align="center">'.$row["vocabulary_name"].' </td>';
          echo '<td align="center">'.$row["translation"].' </td>';
          echo '<td align="center">'.$row["level_id"].' </td>';
          $id = $row["vocabulary_id"];
          echo '<td align="center"><a href ="editformvocab.php?id='.$id.'" class="btn btn-primary btn-sm" href="#" role="button">Edit</a>
                <button type="button" class="btn btn-danger btn-sm" onclick = "func_delete(\''.$row["vocabulary_id"].'\');" >Delete</a></td>';

          echo '</tr>';

        }
         ?>

      </table>
      <div align="center">
        <nav aria-label="...">
          <ul class="pagination">
            <li class="active"><a href="?page=1">1 <span class="sr-only">(current)</span></a></li>
            <li class=""><a href="?page=2">2 <span class="sr-only">(current)</span></a></li>
            <li class=""><a href="?page=3">3 <span class="sr-only">(current)</span></a></li>
            <li class=""><a href="?page=4">4 <span class="sr-only">(current)</span></a></li>
            <li class=""><a href="?page=5">5 <span class="sr-only">(current)</span></a></li>
            <li class=""><a href="?page=6">6 <span class="sr-only">(current)</span></a></li>
          </ul>
        </nav>
      </div>
   </div>
  </div>
</body>
</html>
