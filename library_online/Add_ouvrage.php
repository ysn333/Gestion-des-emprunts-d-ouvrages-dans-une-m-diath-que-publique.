<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add ouvrage</title>
</head>
<body style="background-color: rgb(140, 251, 255); "> 
    
<?php
    include "navbar.php";
    include 'connect.php';


?>

<center>

        <h1>add ouvrage</h1>

<form style="width: 500px;" method="post" action="fun/addouvrage.php" enctype="multipart/form-data">   
<?php
        
        
        $re = $_GET['re'];

        if ($re == '2') {
            echo " ouvrage added ";
        }

        if ($re == '1') {
            echo "Book has been added before";
        }
        ?>
<br><br><br>     


    <div>
        <label for="">titre</label>
        <input type="text" name="titre" id="">
    </div>
        <br>
        <div>
            <label for="">auteur</label>
            <input type="text" name="auteur" id="">
        </div>
            <br>
            <div>
                <label for="">image_couverture</label>
                <input type="file" name="image_couverture" id="">
            </div>
                <br>

                    <br>
                    <div>
                        <label for="">etat</label>
                        <select name="etat" id="">
                            <option value="Neuf">Neuf</option>
                            <option value="Bon état">Bon état</option>
                            <option value="Acceptable">Acceptable</option>
                            <option value="Assez usé">Assez usé</option>
                            <option value="Déchiré">Déchiré</option>
                        </select>
                    </div>
                    <div>
                        <label for="">reference_number</label>
                        <input type="text" name="reference_number" id="">
                    </div>
                    <div>
                        <label for="">number of copies</label>
                        <input type="text" name="number_of_copies" id="">
                    </div>
                        <br>
                        <div>
                        <label for="">date_achat</label>
                        <input type="date" name="date_achat" id="">
                    </div>
     
            <div>
                
                <label for="">nb_pages</label>
                <input type="text" name="nb_pages" id="">
            </div>
                <br>
    <div>
        <label for="">type</label>

        <select name="type" id="">
            <option value="book">book</option>
            <option value="cd">cd</option>
            <option value="DVDs">DVDs</option>
            <option value="roman">roman</option>
            <option value="mémoire de recherche">mémoire de recherche</option>
        </select>
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