<?php

    include '../connect.php';

    
    $full_name = $_GET['full_name'];
    $the_phone = $_GET['the_phone'];
    $the_password = $_GET['the_password'];
    $reset_password = $_GET['reset_password'];


    $the_user = $_GET['the_user'];

    $sql = "SELECT * FROM users WHERE the_user = '$the_user'";
    $result = $conn->query($sql);
    $count = $result->num_rows;


    if ($count ==1 ) {
        header('Location:http://localhost/library_online/registre.php?re=1');
        exit();
    }
    

 
    if ($the_password !== $reset_password) {
        
        header('Location:http://localhost/library_online/registre.php?re=2.');
        exit();
    }

    $stage = $_GET['stage'];
    $notes = $_GET['notes'];


    $sql = "INSERT INTO 	users    (the_user , full_name , the_phone , the_password , stage , notes ) 
    VALUE ( '$the_user' ,  '$full_name' ,  '$the_phone' ,  '$the_password' ,  '$stage' ,  '$notes' )";

    $result2 = $conn->query($sql);
    header('Location:http://localhost/library_online/registre.php?re=');

?>