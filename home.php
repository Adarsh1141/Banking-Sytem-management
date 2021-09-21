<?php session_start();
if(empty($_SESSION['id'])):
   header('Location:login.php');
endif;   ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indian Bank </title>
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    

    <!-- Fonts -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@500&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">

    <!-- AOS  -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

</head>
<body onload="loader()">

  <!-- loader for splash screen -->
  <div id="loading"></div>

    <!-- navbar starts here  -->
    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
      <em class='bx bxs-bank bx-rotate-90 bx-tada bx-md' style='color:rgba(129,229,11,0.99)'  ></em>
        <a class="navbar-brand" href="#">IDFC Bank</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="./home.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./details.html">Customers</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./aboutus.html">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout-process.php">logout</a>
            </li>
          </ul>
        </div>
    </nav>
    <!-- navbar ends here  -->

    <!-- here content starts here -->
    <div class="container-fluid hero-content">
      <div class="row align-items-center">
        <div class="col-md-6 col-sm-12 text-center" data-aos="fade-up">
          <h1>Welcome to IDFC Bank.</h1>
          <p class="lead muted">Transfer Easily</p>
          <p>Money Transfer Fast</p>
          <br>
          <br>
          <a class="get-started" href="./tsfcustomers1.html">Get Started</a>
        </div>
        <div class="col-md-6 col-sm-12 text-center" data-aos="fade-left">
          <div class="bank-div">
            <img class="hero-img" src="assets/media/bank.svg" alt="img-showing-money-transfer">
          </div>
        </div>
      </div>
    </div>
    <!-- here content ends here -->




    <!-- footer starts here -->
    <footer>
      <hr>
      <div class="row text-center">
        <div class="col-md-6">
          <p>Made by <b>Manish kumar.</b></p>
          
        </div>
        <div class="col-md-6 text-center">
            <ul class="social-icons">
              Contact Me:
              <li><a target="_blank" class="github" href="https://github.com/manish1822510059"><i class="fab fa-github fa-2x"></i></a></li>
              
              <li><a target="_blank" class="linkedin" href="https://www.linkedin.com/in/manish-k-951800135//"><i class="fab fa-linkedin fa-2x"></i></a></li>   
            </ul>
        </div>
      </div>
    </footer>
  
    <!-- footer ends here -->

    <!-- spalsh screen js -->
    <script>
      var preloader = document.getElementById("loading");
      function loader(){
        preloader.style.display = 'none';
      }
    </script>

    <script src="assets/js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js"></script>
    <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js"></script>

    <!-- aos data  -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({
        duration: 700,
      });
    </script>
    
</body>
</html>