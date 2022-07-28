<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

<nav class="navbar navbar-expand-lg" >
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
    <img src="images/logo.svg" alt="" width="150" height="150">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Admin_login_page.php">Login</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      
    </div>
  </div>
</nav>

    <div class="container ">


        <div class="row align-items-center" style="margin-top: 120px;">

            <div class="col">
                <img class="rounded" src="images/banner.jpeg" alt="banner" style="width: 600px;">
            </div>

            <div class="col">
                <h1 class="align-middle" style="color: #5fccac;">Welcome to Mentor.com</h1>
                <h2 class="align-middle mt-4" style="color: black;">We help students to improve their grades</h2>
                <a href="bookAppointment.html" class="btn btn-primary mt-4" style="background-color: #5fccac; border: none; font-size: large;">Book Appointment Now</a>
            </div>
        </div>



    </div>

</body>

<footer class="bg-light text-center text-lg-start" style="position: fixed;
height: 100px;
bottom: 0;
width: 100%;">
    <div class="text-center p-3" style="background-color: #5fccac;">
        © 2022 Copyright:
        <a class="text-dark" href="#">Mentor.com</a>
    </div>
</footer>

</html>
<?

?>