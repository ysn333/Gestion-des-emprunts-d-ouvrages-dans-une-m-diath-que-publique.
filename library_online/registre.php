<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: rgb(140, 251, 255); "> 
    
<?php

include 'connect.php';


?>

<center>

        <h1>registre</h1>

<form style="width: 500px;" method="get" action="fun/add_users.php">   
<?php
        
        
        $re = $_GET['re'];

        if ($re == '1') {
            echo "name not valid";
        }

        if ($re == '2') {
            echo "password not valid";
        }
        ?>
<br><br><br>     
<br><br><br>

    <div>
        <label for="">Name</label>
        <input type="text" name="the_user" id="">
    </div>
        <br>
        <div>
            <label for="">Name user</label>
            <input type="text" name="full_name" id="">
        </div>
            <br>
            <div>
                <label for="">Numbre phone</label>
                <input type="text" name="the_phone" id="">
            </div>
                <br>

                    <br>
                    <div>
                        <label for="">msg</label>
                        <input type="text" name="notes" id="">
                    </div>
                        <br>
                        <div>
                            <select name="stage" id="">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>

                            </select>
                        </div>
                            <br>
            <div>
                <label for="">Password</label>
                <input type="text" name="the_password" id="">
            </div>
                <br>
    <div>
        <label for="">Reset Password</label>
        <input type="password" name="reset_password" id="">
    </div>
        <br>
    <div>
        <input id="submit" type="submit" value="Submit">
    </div>
</form>
<a href="login.php">Login </a>
<p></p>
    </center>
</body>
</html>