<?php

    include '../connect.php';

    $name = $_POST['name'];
    $password = $_POST['password'];
    
    $sql = "SELECT * FROM users WHERE the_user = '$name' AND the_password	= '$password' ";
    $result = $conn->query($sql);
    $count = $result->num_rows;

    if ($count == 0 ) {
        header('Location:http://localhost/library_online/login.php');
        exit();
    }

    if ($count !== 0) {
        header('Location:http://localhost/library_online');
        session_start();
        $_SESSION['library_online'] =   $name;
        exit();
    }
?>