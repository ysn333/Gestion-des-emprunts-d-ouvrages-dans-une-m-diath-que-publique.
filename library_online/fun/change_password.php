<?php

    include '../connect.php';

    session_start();

    $old_password = $_POST['old_password'];
    $new_password = $_POST['new_password'];
    $reset_password = $_POST['reset_password'];

    $the_user = $_SESSION['library_online'];

    
    $sql = "SELECT * FROM users WHERE the_user = '$the_user'";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc())  {
        $the_password	 = $row['the_password'];
    }

    if ($old_password  <> $the_password) {
        header('Location:http://localhost/library_online/password.php?re=1');
        exit();
    }
    if ($new_password !== $reset_password) {
        
        header('Location:http://localhost/library_online/password.php?re=2');
        exit();
    }

    $sql = "UPDATE `users` SET  the_password = '$reset_password' WHERE the_user = '$the_user'";
    $result = $conn->query($sql);
    header('Location:http://localhost/library_online/admin.php')
?>