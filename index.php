<?php
//init_set('display_errors', 1);//mac
//error_reporting(E_All); //mac

require_once('admin/phpscripts/config.php');

//what ip address youre signing in at
//test it localhost/MMED_3014_18/admin/admin_login.php
//php.net there are $_SERVER options
$ip = $_SERVER['REMOTE_ADDR'];
//echo $ip;

if (isset($_POST['submit'])) {
  //trim gets rid of whitespace
  $username = trim($_POST['username']);
  $password = trim($_POST['password']);

  if ($username !=="" && $password !=="") {
  //  echo "you can type";
  $result = logIn($username, $password, $ip);
  $message = $result;
  }else{
    $message ="Please fill in the required fields";
    //echo $message;
  }
}



 ?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>CMS Portal Login</title>
    <link rel="stylesheet" href="css/main.css">
  </head>
  <body>
    <div class="box">

    <h1 class="center-t">Welcome</h1>
    <p class="center">
    <?php
      if(!empty($message)){
        echo $message;
      }
     ?>
     </p>
      <form action="index.php" method="post">
        <label class="center">Username :</label>
        <input type="text" name="username" value="">
          <br><br>
        <label class="center">Password :</label>
        <input type="text" name="password" value="">
          <br><br>
        <input class="center-btn" type="submit" name="submit" value="Enter">




      </form>


    </div>
  </body>
</html>
