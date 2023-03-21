<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;1,100;1,300;1,400;1,500&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
</head>
<html>
<body>
<style>
    button {
        background-color: #0cb1c7;
        color: #fff;
        font-size : 16px;
        border:none;
        padding : 15px 32px;
        text-align: center;
        display: inline;
        margin: 4px 2px ;
        width: 100%;
    }
</style>
<?php
    include "navbar.php";
?>
<center>
<div style="margin-top:200px; width: 500px; ">
    <a href="password.php"><button>modfier password</button></a><br><br>
    <a href="Add_ouvrage.php?re="><button>add ouvrage</button></a><br><br>
    <a href="search_user.php?n1="><button>users</button></a><br><br>
    <a href="search_ouvrage.php?n1="><button>ouvrage</button></a><br><br>
</center>

</body>
</html>
