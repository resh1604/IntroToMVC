<?php
//DATABASE CONNECTION
$dbhost = "localhost";
$dbname = "lily";
$dbusername = "root";
$dbpassword = "";
    
$user_conn = mysqli_connect($dbhost, $dbusername, $dbpassword, $dbname);
if($user_conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>