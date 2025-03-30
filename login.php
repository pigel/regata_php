<?php

 include 'config.php';
 
  if (!$link) {
     exit;
 }
 else{
     if (!empty($_POST["user"]&&!empty($_POST["password"]))){
     $user=$_POST["user"];
     $password=$_POST["password"];
    } 

    $sql = mysqli_query($link, "SELECT * FROM users WHERE user = '$user' AND password = '$password'");


    $fetch = mysqli_fetch_assoc($sql);

    if (!empty($fetch)){
        echo "success";

        $sql = mysqli_query($link, "UPDATE users SET last='$time' WHERE user= '$user'");

    
    } else {
        echo "wrong";
    }

}

?>



