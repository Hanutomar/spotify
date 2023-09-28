<?php

session_start();

include('database_conn.php');
$msg = false ;
if (isset($_POST['user_name'])) {
    $user_name = $_POST['user_name'];
    $user_password = $_POST['user_password'];

    $query  =  "select * from users where name = '".$user_name."' AND password = '".$user_password."' limit 1";

    $result = mysqli_query($con, $query);

    if (mysqli_num_rows($result)==1) {
        header("Location: welcome.php");
    } else {
        $msg = "Inccorect Password";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
    <div class="left_bx1">
         <div class="content">
             <form action="#" method="POST">
                <h3>Sign Up</h3>
                <div class="card">
                    <label for="name">Name</label>
                    <input type="text" name="user-name" placeholder="Enter your name..." required>
                </div>
                <div class="card">
                    <label for="password">Password</label>
                    <input type="password" name="user-password"placeholder="Enter your password..."  required>
                </div>
                <input class = "submit" type="submit" value="Sign Up">
                <div class="check">
                    <input type="checkbox" name="" id=""><span>Remember Me.</span>
                </div>
                <p>You have an account? <a href="login.php">Login</a></p>
             </form>
         </div>
     </div>
     <div class="right_bx1">
         <img src="img/fdfe239b7c9f.png" alt="">
         <?php
            if ($msg) {
                echo ('<h3>'.$msg.'</h3>');
            }
            ?>
     </div>
    </header>
</body>
</html>


  