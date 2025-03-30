<?php
 $login="ivan";
 $parol="somepassword";
 $j_login="vasya";
 $j_parol="passwordsome";
 $latitude=0.1;
 $longitude=0.0;
 $speed=0.0;
 //$time=date("H:i:s");
 //$time=date('Moscow');

 date_default_timezone_set('Etc/GMT-3');

 $time=date("H:i:s d-m-Y"); 

# $db_host = '@@@@@@@'; // сервер Сергея
 $db_host = '@@@@@@@';  // сервер Дмитрия
 
# $db_pass = '@@@@@@@@'; // пароль БД Сергея
 $db_pass = '@@@@@@@@@'; // пароль БД Дмитрия
 
 $db_user = 'dima';    // имя пользователя БД
 $db_name = 'app';

 $message='Lorem ipsum'; 
 $link = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
 
?>


