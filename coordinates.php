<?php
include 'config.php';
  if (!$link) {
     exit;
 }
 else{
     if (!empty($_POST["user"]&&!empty($_POST["latitude"]&&!empty($_POST["longitude"]&&!empty($_POST["speed"]))))){
     $user=$_POST["user"];
     $latitude=$_POST["latitude"];
     $longitude=$_POST["longitude"];
     $add_user=$_POST["speed"];
    }

    $sql = mysqli_query($link, "SELECT * FROM coordinates WHERE user = '$user'");

    $fetch = mysqli_fetch_assoc($sql);

    if (!empty($fetch)){   
      $sql = mysqli_query($link, "INSERT coordinates (user, latitude, longitude, speed, checkin) VALUES ('$user', '$latitude', '$longitude', '$speed', '$time')");
    }
 }
?>
