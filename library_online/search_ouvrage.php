<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>search ouvrage</title>
</head>
<body>
<?php
    include "navbar.php";
    include 'connect.php';

    $n1 = $_GET['n1'];
?>
    <center>
        <div style="width:500px; ">
        <br><br><br>
            <form method="get" action="search_ouvrage.php" >
                <label for="form-control">search ouvrage</label>
                <input class="form-control"  type="text" name='n1' value='<?php echo $n1;?>'>
                <input   class="btn btn-secondary"  type="submit" value="submit">                             <br><br>   <br><br>
            </form>
            </div>
            <table style="width:1200px; " class="table table-dark table-striped">
            <tr>
            <th>N*</th>
                <th>image_couverture	</th>
                <th>titre</th>
                <th>auteur</th>
                <th>date_achat</th>
                <th>nb_pages</th>
                <th>type</th>
                <th>count_ouverture</th>
                <th>etat</th>
                <th>reference_number</th>
                <th>number_of_copies</th>
                <th>مستعارت</th>
                <th>تالف</th>
                <th>متاحت</th>
            </tr>
            
            <?php
            $no = 0;
                $sql = "SELECT * FROM ouvrage WHERE titre LIKE '%$n1%'";

                $result = $conn->query($sql);
                while($row =  $result->fetch_assoc()){
                    $no = $no+1;

            ?>
            <tr>
                <th><?php echo $no ?></th>
                <th>
                    <a href="img/book/<?php echo $row['image_couverture'] ?>">
                        <img style="width: 50px; height:50px;" src="img/book/<?php echo $row['image_couverture'] ?>" alt="">
                    </a>
                </th>
                <th><?php echo  $row['titre'] ?></th>
                <th><?php echo  $row['auteur'] ?></th>
                <th><?php echo  $row['date_achat'] ?></th>
                <th><?php echo  $row['nb_pages'] ?></th>
                <th><?php echo  $row['type'] ?></th>
                <th><?php echo  $row['count_ouverture'] ?></th>
                <th><?php echo  $row['etat'] ?></th>
                <th><?php echo  $row['reference_number'] ?></th>
                <th><?php echo  $row['number_of_copies'] ?></th>

            </tr>
            <?php
                }
            ?>
        </table>
        
    </center>
</body>
</html>