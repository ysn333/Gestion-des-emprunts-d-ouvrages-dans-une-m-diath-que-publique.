<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: rgb(140, 251, 255);"> 

<?php


    include "navbar.php";
    include 'connect.php';

?> 
<center>

<br><br><br>
        <h1>change password</h1>
        <br><br><br>
<form action="fun/change_password.php" method="POST">    
    <div>
        <?php
            $re = $_GET['re'];
            
            if ($re == 1) {
                echo 'old password not valid ';
            }

            if ($re == 2) {
                echo 'The new password does not match';
            }
            
        ?>
    </div>    
    <div>
        <label for="">old password</label>
        <input type="text" name="old_password" id="">
    </div>
        <br>
    <div>
        <label for="">new password</label>
        <input type="text" name="new_password" id="">
    </div>
        <br>
        <div>
        <label for="">reset password</label>
        <input type="text" name="reset_password" id="">
    </div>
    <br>

    <div>
        <input id="submit" type="submit" value="submit">
    </div>
</form>

<p></p>
    </center>
</body>
</html>