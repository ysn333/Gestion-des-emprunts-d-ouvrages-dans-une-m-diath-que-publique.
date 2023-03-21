<?php

$servername = 'localhost';
$username = 'root';
$pass = '';
$dbname = 'library_online';

$conn = new mysqli($servername , $username , $pass ,$dbname);
$conn->set_charset('utf8');




?>
<style>
 body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Roboto', sans-serif;
        }
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;

        }

        li {
            float: left;
            border-right: 1px solid #bbb;
        }

        li a{
            color: aliceblue;
            text-align: center;
            padding: 15px;
            text-decoration: none;
            display: block;
        }
        input {

        font-size : 16px;
        border:none;
        padding : 10px 22px;
        text-align: center;
        display: inline;
        margin: 4px 2px ;
        width: 100%;
    }
    #submit {
        background-color: #0cb1c7;
        color: #fff;
        font-size : 16px;
        border:none;
        padding : 15px 32px;
        text-align: center;
        display: inline;
        margin: 4px 2px ;
        width: 100%;
        margin-left: 24px;

    }
    form {
        width: 500px;

    }
    input {
        width: 100%;
    }
</style>