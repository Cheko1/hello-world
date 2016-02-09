<?php

$user = root;
$password = root;
$host = localhost;
$port = 3306;
$db = test;

$link = mysqli_init();
$success = mysqli_real_connect(
   $link, 
   $host, 
   $user, 
   $password, 
   $db,
   $port
);

//$SQL = "INSERT INTO test.temperature (sensor ,celsius) VALUES ('299999820500006a', '01.65')";
        
//mysqli_query($link , $SQL);

?>
