<?php
session_start();
if (!isset($_SESSION["login_id"])) {
  header('location:loginform.php');
}
 ?>
<div class="navbar navbar-inverse navbar-fixed-left">
  <a class="navbar-brand" href="#"></a>
  <ul class="nav navbar-nav">
    <li><a href="manager-admin.php">Manager Admin</a></li>
    <li><a href="manage-users.php">Manager User</a></li>
  <!--  <li class="dropdown"><a href="manage-users.php" class="dropdown-toggle" data-toggle="dropdown">Manager User <span class="caret"></span></a>
     <ul class="dropdown-menu" role="menu">
      <li><a href="manage-users.php">Add User</a></li>
      <li><a href="editformuser.php">Edit User</a></li>
      <li><a href="#">Delete User</a></li>
     <li class="divider"></li>
      <li><a href="#">Sub Menu4</a></li>
      <li><a href="#">Sub Menu5</a></li>
     </ul>
   </li>-->
   <li><a href="manager-Level-Time.php">Manager Level and Time</a></li>
   <li><a href="manager-vocab.php">Manager Vocabulary</a></li>
   <li><a href="manager-statistic.php">Manager Statistic</a></li>
   <br/><br/><br/><br/><br/><br/><br/><br/><br/>
   <li><a href="action/logout.php"><h4>Logout</h4></a></li>
  </ul>
</div>
