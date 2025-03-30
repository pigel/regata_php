<?php
 include 'config.php';
  if (!$link) {
     exit;
 }
 else{
     if (!empty($_POST["user"]&&!empty($_POST["password"])&&!empty($_POST["email"]&&!empty($_POST["phone"])))){
     $add_user=$_POST["user"];
     $add_password=$_POST["password"];
     $add_email=$_POST["email"];
     $add_phone=$_POST["phone"];
    }


    $sql = mysqli_query($link, "SELECT * FROM users WHERE user = '$add_user'");

    $fetch = mysqli_fetch_assoc($sql);


    if (!empty($fetch)){
        echo "exist";    
    } else {
      echo "noexist";
      $sql = mysqli_query($link, "INSERT users SET user='$add_user', password='$add_password', email= '$add_email', phone= '$add_phone',
      registered='$time'");

      $sql = mysqli_query($link, "INSERT messages SET user='$add_user'");

      $sql = mysqli_query($link, "INSERT coordinates SET user='$add_user'");


    }

  }
  
?>
