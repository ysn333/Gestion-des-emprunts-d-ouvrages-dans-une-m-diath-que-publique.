<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;1,100;1,300;1,400;1,500&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library</title>
</head>

<body>
    
    <style>
       
    </style>
<?php


    include "navbar.php";
?>
<center>        
    <br><br><br>
    <h1>Andalusia Library</h1>

    <div id="" style="background-color: rgb(71, 234, 255); width: 100%; height: 500px;">
        <br><br>
        <h2>About the library</h2>
        <br><br>

        <div style="width: 45%; float: left; text-align: left; margin-left: 20PX; text-align: justify; ">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, facere facilis sed quam a ut minus qui vero quasi, sit quisquam debitis quidem nesciunt laboriosam quibusdam in corporis similique modi!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, facere facilis sed quam a ut minus qui vero quasi, sit quisquam debitis quidem nesciunt laboriosam quibusdam in corporis similique modi!

                Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, facere facilis sed quam a ut minus qui vero quasi, sit quisquam debitis quidem nesciunt laboriosam quibusdam in corporis similique modi!
            </p>
        </div>
       <div  style="width: 45%; float: right;">
            <img style="width: 92%; height: 300px;" src="https://www.citylifemadrid.com/wp-content/uploads/nationallib2.jpg" alt="">
       </div>
        
    </div>



    <div id="d1" style="background-color: rgb(102, 99, 255); width: 100%; height: 700px;">
        <br><br>
        <h2>Books</h2>
        <br><br>
        <?php

                $sql = "SELECT * FROM ouvrage ";

                $result = $conn->query($sql);
                while($row =  $result->fetch_assoc()){
                 

            ?>
        <div style="float: left; width: 25%; margin-top: 20px;">
            <img src="img/book/<?php echo $row['image_couverture'] ?>" style="width: 100px; height: 120px; " alt="">
            <h3><?php echo $row['titre'] ?></h3>
            <label for=""><?php echo $row['auteur'] ?></label>
            <label for="">
            <?php echo $row['etat'] ?>
            </label>
        </div>
<?php
    }
    ?>
        </div>



    <div id="d2" style="background-color: rgb(10, 148, 136); width: 100%; height: 500px;">
        <br><br>
        <h2>Work Team</h2>
        <div style=" width: 55%; margin-top: 20px;">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ4gT7XF-tuhheJgiRWwErySOdpa0wyWdHqfQ&usqp=CAU" style="width: 200px; height: 220px; " alt="">
            <h3>Patron</h3>
            <label for="">Yassine Moundelssi</label>
            <label for="">
                
            </label>
        </div>
    </div>



    <div id="d3" style="background-color: rgb(255, 132, 249); width: 100%; height: 500px;">
        
        <br><br>
        <h2>Workplan</h2>
    </div>

    
    <div id="d4" style="background-color: rgb(163, 0, 155); width: 100%; height: 500px;">
        <br><br>
        <h2>Workplan</h2>
    </div>


    <div id="d5" style="background-color: rgb(255, 145, 160); width: 100%; height: 500px;">
        <br><br>
        <h2>Call us</h2>
        <form action="">
        <div>
            <label for="">Name</label>
            <input type="text" name="" id="">
        </div>
        <div>
            <label for="">Email</label>
            <input type="text" name="" id="">
        </div>
        <div>
            <label for="">Numbre phone</label>
            <input type="text" name="" id="">
        </div>
        <div>
            <label for="">Message</label>
            <textarea name="" id="" cols="30" rows="10"></textarea>
        </div>
        <div>
            <input type="submit" value="submit">
        </div>
        </form>
    </div>

</center>

</body>
</html>