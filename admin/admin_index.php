<?php
//init_set('display_errors', 1);//mac
//error_reporting(E_All); //mac

require_once('phpscripts/config.php');
 confirm_logged_in();
first_log();


 ?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>CMS Portal</title>
      <link rel="stylesheet" href="../css/main.css">
  </head>
  <body>

<section class="box2">


<div class="title">
    <?php
    echo "<h1> Hi {$_SESSION['user_name']} welcome!</h1>";
    ?>
</div>

    <p>
    <?php
    if (isset($_GET['user_date'])) {

      $date=$_GET['user_date'];

      $myQuery = "SELECT {$date} FROM tbl_user WHERE user_id={$id}";
    //echo $myQuery;
      $result = mysqli_query($link, $myQuery);
    //echo $result;
      //$row = mysqli_fetch_assoc($result);
    }
    echo "<p> {$result} </p>";
    ?>
  </p>

  <a class="link1 click" href="admin_createuser.php">Create User</a>
  <a class=" click" href="admin_edituser.php">Edit User</a>
  <a class="click" href="admin_deleteuser.php">Delete User</a>
    <a class="click" href="phpscripts/caller.php?caller_id=logout">Logout</a>
</section>
  </body>
</html>
