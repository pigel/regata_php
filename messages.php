<?php


 include 'config.php';
  if (!$link) {
     exit;
 }
 else{
     if (!empty($_POST["user"]&&!empty($_POST["message"]))){
     $add_user=$_POST["user"];
     $add_message=$_POST["message"];
    }


    $sql = mysqli_query($link, "SELECT * FROM messages WHERE user = '$add_user'");

    $fetch = mysqli_fetch_assoc($sql);


    if (!empty($fetch)){
      $sql = mysqli_query($link, "INSERT messages SET user='$add_user', message='$add_message', received='$time'");
    }
  }
  
?>
