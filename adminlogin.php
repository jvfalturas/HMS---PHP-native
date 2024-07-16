<?php
session_start();
require('include/database.php');


if(isset($_POST['login'])){  
$username = $_POST['username'];
$password = $_POST['password'];
    $error = array();
    if (count($error) == 0) {
        $queryadmin = "SELECT * FROM admin WHERE username ='$username' AND password='$password'";
        $sqladmin = mysqli_query($connection, $queryadmin);

        if (mysqli_num_rows($sqladmin) == 1) {
            echo "<script>alert('Successfully Logged in.')</script>";
            $_SESSION['admin'] = $username;        
            header("Location:admin/index.php");
            exit();                       
        } else {
            echo "<script>alert('Invalid Username or Password')</script>";
        }
    }

} 
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <!-- Link Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body style="background-image: url(img/hospital.jpg);background-repeat: no-repeat; background-size: cover;">
    <?php require('include/header.php'); ?>

    <div style="margin-top: 10px"></div>

    <div class="container">

        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="jumbotron">
                    <img src="img/adminLogin" class="col-md-12">
                    <form method="post" class="my-2">

                        <div>
                            <?php
                            if (isset($error['admin'])) {
                                $show = $error['admin'];
                            } else {
                                $show = "";
                            }
                            echo "" . $show . "";
                            ?>
                        </div>

                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" autocomplete="off"
                                placeholder="Enter username" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" autocomplete="off"
                                placeholder="Enter password" required>
                        </div>
                        <input type="submit" name="login" class="btn btn-primary my-2" value="Login">
                    </form>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>

    <!-- Link Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>