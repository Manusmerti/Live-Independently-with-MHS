<?php 
session_start();
if(! isset($_SESSION['is_login']))
{
  header('location:login.php');
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Micro Housing System · Bootstrap</title>


    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="assets/css/starter-template.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="#">MHS for Officer House</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="home.php">Home </a></li>
          </li>

        <li class="nav-item active">
            <a class="nav-link" href="setUpNewResidence.php"> Set Up New Residence </a></li>
          </li>

          <li class="nav-item active">
            <a class="nav-link" href="viewResidences.php"> View Residence </a></li>
          </li>

          <li class="nav-item active">
            <a class="nav-link" href="#">View application <span class="sr-only">(current)</span></a>
          </li>
        </ul>
    
        <a href="logout.php" class="form-inline my-2 my-lg-0 btn btn-secondary">Logout</a>
    </div>
</nav>

<main role="main" class="container">

  <div class="starter-template">
    <h1>Welcome <?php echo $_SESSION['fullname']; ?></h1>
    <p class="lead">Let's get started!</p>
  </div>

  </div>
    <div style="float:left;width: 30%;margin-left: 15px;height: 240px;margin-bottom: 15px;">
        <img src="img/pict01.jpg" style="width: 100%;height: 100%;">
    </div>
    <div style="float:left;width: 30%;margin-left: 15px;height: 240px;margin-bottom: 15px;">
        <img src="img/pict02.jpg" style="width: 100%;height: 100%;">
    </div>
    <div style="float:left;width: 30%;margin-left: 15px;height: 240px;margin-bottom: 15px;">
        <img src="img/pict03.jpg" style="width: 100%;height: 100%;">
    </div>
    <div style="float:left;width: 30%;margin-left: 15px;height: 240px;margin-bottom: 15px;">
        <img src="img/pict04.jpg" style="width: 100%;height: 100%;">
    </div>
    <div style="float:left;width: 30%;margin-left: 15px;height: 240px;margin-bottom: 15px;">
        <img src="img/pict05.jpg" style="width: 100%;height: 100%;">
    </div>
    <div style="float:left;width: 30%;margin-left: 15px;height: 240px;margin-bottom: 15px;">
        <img src="img/pict06.jpg" style="width: 100%;height: 100%;">
    </div>

</main><!-- /.container -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script></body>
</html>