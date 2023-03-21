<?php

    include '../connect.php';

    $titre = $_POST['titre'];
    $auteur = $_POST['auteur'];

    $date_achat = $_POST['date_achat']; 
    $type = $_POST['type'];
    $count_ouverture = $_POST['count_ouverture'];
    $etat = $_POST['etat'];
    $reference_number = $_POST['reference_number'];
    $number_of_copies = $_POST['number_of_copies'];


   
    $sql = "SELECT * FROM ouvrage WHERE reference_number = '$reference_number'";
    $result = $conn->query($sql);
    $count = $result->num_rows;


    if ($count ==1 ) {
        header('Location:http://localhost/library_online/Add_ouvrage.php?re=1');
        exit();
    }

    $image_couverture = $_FILES['image_couverture']['name'];
    $image_couverture = date("YmdHis"). '.' .pathinfo($image_couverture , PATHINFO_EXTENSION);
    $filelnb = $_FILES['image_couverture']['tmp_name'];
    $upload_files ='../img/book/';
    move_uploaded_file($filelnb ,$upload_files . $image_couverture);


    $sql = " INSERT INTO ouvrage (titre, auteur, date_achat, type, count_ouverture, etat, reference_number ,image_couverture ,number_of_copies) 
    VALUES ( '$titre',  '$auteur', '$date_achat', '$type', '$count_ouverture', '$etat', '$reference_number', '$image_couverture' , '$number_of_copies')";

    $result2 = $conn->query($sql);
    header('Location:http://localhost/library_online/Add_ouvrage.php?re=2');

?>
