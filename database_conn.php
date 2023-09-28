<?php

$server_name = "localhost";
$user_name = "root";
$user_password = '';
$database_name = "login_user";

$con = mysqli_connect($server_name, $user_name, $user_password, $database_name);

if (!$con) {
    die ('Connection failed:'  .mysql_error());
} 

// else {
//     echo (" Database Succesfully Connected");
// }


?>