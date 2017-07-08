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
   <div class="row">
     <h2>Manage User</h2>

     <table class="table table-striped table-bordered">
      <tr class="success" >
          <b><td>ลำดับที่</td></b>
          <td>Name</td>
          <td>UserName</td>
          <td>Action</td>
      </tr>
      <tr>
          <td>ลำดับที่</td>
          <td>Name</td>
          <td>UserName</td>
          <td>
            <button type="button" class="btn btn-primary btn-sm">Edit</button>
            <button type="button" class="btn btn-danger btn-sm">Delete</button>
          </td>
      </tr>
    </table>
    </div>

   </div>
  </div>
</body>
</html>
