


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css">

    <title>Header</title>
  </head>
  <body>

        <nav class="navbar navbar-expand-lg navbar-info bg-info">
            <div class="container-fluid">
            <h5 class="text-white">Hospital Management System</h5>
            <div class="mr-auto"></div>
            <ul class="navbar-nav">
              <?php
              if(isset($_SESSION['admin'])){
                $user = $_SESSION['admin'];
                $user = "Admin";
                echo'                
                <li class="nav-item"><a href="" class="nav-link text-white">'.$user.'</a></li>
                <li class="nav-item"><a href="logout" class="nav-link text-white">logout</a></li>
                ';}
              else{echo'
                
                  <li class="nav-item"><a href="index.php" class="nav-link text-white">Home</a></li>
                  <li class="nav-item"><a href="adminlogin.php" class="nav-link text-white">Admin</a></li>
                  <li class="nav-item"><a href="" class="nav-link text-white">Doctor</a></li>
                  <li class="nav-item"><a href="" class="nav-link text-white">Patient</a></li>
                ';}
              ?>

            </ul>
            </div>
        </nav>


  </body>
</html>