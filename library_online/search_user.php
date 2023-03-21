<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>search user</title>
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
            <form method="get" action="search_user.php" >
                <label for="form-control">search users</label>
                <input class="form-control"  type="text" name='n1' value='<?php echo $n1;?>'>
                <input   class="btn btn-secondary"  type="submit" value="submit">                             <br><br>   <br><br>
            </form>
            </div>
            <table style="width:1200px; " class="table table-dark table-striped">
            <tr>
            <th>N*</th>
                <th>the_user</th>
                <th>full_name</th>
                <th>job</th>
                <th>stage</th>
                <th>notes</th>
                <th>the_phone</th>
            </tr>
            
            <?php
            $no = 0;
                $sql = "SELECT * FROM users WHERE full_name LIKE '%$n1%'";

                $result = $conn->query($sql);
                while($row =  $result->fetch_assoc()){
                    $no = $no+1;

            ?>
            <tr>
                <td><?php echo $no ?></td>
                <td><?php echo $row['the_user'] ?></td>
                <td><?php echo  $row['full_name'] ?></td>
                <td>
                    <form action="fun/update_job_user.php" method="post" >

                    </form>
                    <select name="" id="">
                    <option value="<?php echo $row['job'] ?>"><?php $row['job'] ?> </option>
                        <option value="student">student </option>
                        <option value="Gérant">Gérant</option>
                    </select>
                </td>
                <td><?php echo  $row['stage'] ?></td>
                <td><?php echo  $row['notes'] ?></td>
                <td><?php echo  $row['the_phone'] ?></td>
            </tr>
            <?php
                }
            ?>
        </table>
        
    </center>
</body>
</html>