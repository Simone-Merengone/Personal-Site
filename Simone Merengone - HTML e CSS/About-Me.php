<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>SimoneMerengoneSite</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="css/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="css/About-Me/About-MeStyle.css">
  <link rel="stylesheet" href="css/About-Me/ContactForm.css">
  <link rel="stylesheet" href="css/fonts/fonts.css">

  <!-- Online Fonts-->
  <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">

</head>
<body>
<!-- Start your project here-->  

<!--Navbar-->
<nav class="mb-1 navbar navbar-expand-lg navbar-dark info-color navbar fixed-top">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
    aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-333">

    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link Varela-Round" href="HomePage.html">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link Varela-Round" href="Skills.html">Skills</a>
      </li>
      <li class="nav-item">
        <a class="nav-link Varela-Round" href="Passions.html">Passion</a>
      </li>
    </ul>

    <ul class="navbar-nav ml-auto nav-flex-icons">

      <li class="nav-item">
        <a class="nav-link" href="https://www.facebook.com/profile.php?id=100007726337379">
          <i class="fab fa-facebook-f"></i> </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="https://www.instagram.com/_mere01_/">
          <i class="fab fa-instagram"></i></a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="https://twitter.com/Simone43981532?s=09">
          <i class="fab fa-twitter"></i>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="https://www.linkedin.com/in/simone-merengone-5075b31ab/">
          <i class="fab fa-linkedin-in"> </i>
        </a>

      <li class="nav-item">
        <a class="nav-link" href="mailto:simo.merengone01@gmail.com">
          <i class="fab fa-google-plus-g"></i>
        </a>
      </li>

    </ul>
  </div>
</nav>
<!--Navbar-->

  <div class="Description">

        <h2>Nice to meet you :)</h2>
          <p class="Varela-Round">I was born in Savona in Italy in June 2001. I went to the IT school, ITIS Ferraris Pancaldo in Savona in 
          via "alla rocca 35".
          <br>
          Since when I was a child, I have always been fascinated by great inventors and entrepreneurs such as: Hernry Ford, Nicola Tesla and Elon Musk.
          <br>
          I really love coding and I want to be Full Stack Developer. In my free time I like learning new things about the latest technologies.
          <br>
          I hope to find my dream job and to do it I keep learning and doing new things every day.</p>
  
  <br>
  
  <!--Form --> 
  <h3>Contact Me</h3>

    <span class="correct">
          <?php 
            if (!empty($_SESSION["correct"])){
              echo $_SESSION["correct"];
            }else{
              echo"";
            }
          ?>
    </span> 

    <div class="container">
      <form method="post" action=php\About-Me\form.php>

      <label for="fname" class="Varela-Round">First Name</label>
      <input type="text" id="fname" name="firstname" placeholder="Your name...">

      <span class="error">
        <?php 
          if (isset($_SESSION["fnameERR"])){
            echo $_SESSION["fnameERR"];
          }
        ?>
      </span>

      <br>
  
      <label for="lname" class="Varela-Round">Last Name</label>
      <input type="text" id="lname" name="lastname" placeholder="Your last name...">
      
      <span class="error">
        <?php 
          if (isset($_SESSION["lnameERR"])){
            echo $_SESSION["lnameERR"];
          }
        ?>
      </span>

      <br>

      <label for="lname" class="Varela-Round">Email</label>
      <input type="text" id="email" name="email" placeholder="Your Email address...">
      
      <span class="error">
        <?php 
          if (isset($_SESSION["emailERR"])){
            echo $_SESSION["emailERR"];
          }
        ?>
      </span>

      <br>

      <label for="country" class="Varela-Round">Country</label>
      <select id="country" name="country">
        <option value="Africa" class="Varela-Round">Africa</option>
        <option value="Asia" class="Varela-Round">Asia</option>
        <option value="Australia" class="Varela-Round">Australia</option>
        <option value="Europe" class="Varela-Round">Europe</option>
        <option value="North America" class="Varela-Round">North America</option>
        <option value="South America" class="Varela-Round">South America</option>
      </select>

      <br>
  
      <span class="error">
        <?php 
          if (isset($_SESSION["subjectERR"])){
            echo $_SESSION["subjectERR"];
          }
          session_destroy();
        ?>
      </span>

      <br>

      <label for="subject" class="Varela-Round">Subject</label>
      <textarea id="subject" name="subject" placeholder="Write something..." style="height:200px"></textarea>

      <button class="btn btn-info btn-block Varela-Round" type="submit" id="validate">Sign in</button> 
      </span>

      </form>
    </div>
    
  </div>
  <!-- /.Form --> 

<!-- Footer -->
<footer class="page-footer font-small mdb-color pt-4">

  <!-- Footer Links -->
  <div class="container text-center text-md-left">

    <!-- Footer links -->
    <div class="row text-center text-md-left mt-3 pb-3">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">Contacts:</h6>
      </div>
      <!-- Grid column -->

      <hr class="w-100 clearfix d-md-none">

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold"><i class="fas fa-home mr-3"></i>Place</h6>
        <p>Savona, ITA 17100</p>
      </div>
      <!-- Grid column -->

      <hr class="w-100 clearfix d-md-none">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold"><i class="fas fa-envelope mr-3"></i>Mail</h6>
        <p>simo.merengone01@gmail.com</p>
      </div>

      <!-- Grid column -->
      <hr class="w-100 clearfix d-md-none">

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold"> <i class="fas fa-phone mr-3"></i>Phone</h6>
        <p>+39 380 43 27 402</p>
      </div>
      <!-- Grid column -->

    </div>
    <!-- Footer links -->

    <hr>

    <!-- Grid row -->
    <div class="row d-flex align-items-center">

      <!-- Grid column -->
      <div class="col-md-7 col-lg-8">

        <!--Copyright-->
        <p class="text-center text-md-left">© 2020 Copyright:
            <strong> SimoneMerengoneSite.com</strong>
        </p>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

</footer>
<!-- Footer -->

<!-- End your project here-->

  <!-- jQuery -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript"></script>

</body>
</html>
