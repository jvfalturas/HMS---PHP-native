
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Link Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>HMS</title>
  </head>
  <body>
  <?php require('include/header.php'); ?>

  <div style="margin-top: 50px"></div>

  <div class="container">
    <div class="col-md-12">
      <div class="row">
        <div class="col-md-3 mx-2 shadow">
          <img src="img/info.jpg" style="width: 90%; height: 190px;" >
          <h5 class="text-center">Click the button for more information.</h5>
          <a href="">
            <button class="btn btn-success my-2" style="margin-left: 35%;">More</button>
          </a>
        </div>
        <div class="col-md-4 mx-2 shadow">
          <img src="img/patient.jpg" style="width: 100%" >
          <h5 class="text-center">Sign up so that we can take good care of you.</h5>
          <a href="">
            <button class="btn btn-success my-2" style="margin-left: 35%;">Create Account</button>
          </a>
        </div>
        <div class="col-md-4 mx-2 shadow">
          <img src="img/doctor.jpg" style="width: 100%" >
          <h5 class="text-center">Are you a licensed doctor?</h5>
          <a href="">
            <button class="btn btn-success my-2" style="margin-left: 35%;">Apply Now!</button>
          </a>
        </div>
      </div>
    </div>
  </div>


  </body>
</html>