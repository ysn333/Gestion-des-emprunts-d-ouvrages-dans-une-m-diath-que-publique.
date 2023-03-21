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

    include 'connect.php';

?> 
<center>


        <h1>login</h1>
        <br><br><br>
<form action="fun/user_login.php" method="POST">        
    <div>
        <label for="">name user</label>
        <input type="text" name="name" id="">
    </div>
        <br>
    <div>
        <label for="">password</label>
        <input type="password" name="password" id="">
    </div>
        <br>
    <div>
        <input id="submit" type="submit" value="submit">
    </div>
</form>
<a href="registre.php">create acount</a>
<p></p>
    </center>
</body>
</html>