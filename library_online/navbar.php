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
        input , select {

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
<nav class="navbar bg-dark" data-bs-theme="dark">
<div style="width: 100%; position: fixed; top: 0; ">
    <ul>
        <li><a href="#d5">Call us</a></li>
        <li><a href="#d4">Plan</a></li>
        <li><a href="#d3">Work Team</a></li>
        <li><a href="#d2">Books</a></li>
        <li><a href="#d1">About</a></li>
        <li><a href="">Home</a></li>
        <?php
        include 'connect.php';

            session_start();

            if (!isset($_SESSION['library_online'])) {

            ?>

            <li style="float: right;"><a href="login.php">Sign out</a></li>

            <?php
            }
        ?>
            <?php
 


            if (isset($_SESSION['library_online'])) {
                $name = $_SESSION['library_online'];
                $sql = "SELECT * FROM users WHERE the_user = '$name'";
                $result = $conn->query($sql);
                while($row = $result->fetch_assoc())  {
                    $full_name = $row['full_name'];
                }



            ?>

            <li style="float: right;"><a href="login.php">out</a></li>
            <li style="float: right;"> bonjour <?php echo $full_name ?></li>
            <li style="float: right;"><a href="admin.php">Profil</a></li>


            <?php
            }
        ?>
    </ul>
</div>
</nav>
<br><br><br>