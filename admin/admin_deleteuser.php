<?php
//init_set('display_errors', 1);//mac
//error_reporting(E_All); //mac

require_once('phpscripts/config.php');
 //confirm_logged_in();
$tbl = "tbl_user";
$user = getAll($tbl);

 ?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
      <link rel="stylesheet" href="../css/main.css">
    <title>CMS Portal</title>
  </head>
  <body>

<section class="box">

    <h1 class="title2">Delete User</h1>

    <div class="mid1">

    <?php
    while($row = mysqli_fetch_array($user)){
      //
      echo "{$row['user_fname']} <a href=\"phpscripts/caller.php?caller_id=delete&id={$row['user_id']}\">Delete User</a><br>";


      }
     ?>
       </div>


     </section>
  </body>
</html>
