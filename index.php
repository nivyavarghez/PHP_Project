<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BDMS...</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>

        .button-container{
            margin-left:50%;
        }
        /* p.lead{
          color:white;
        } */
        .btn {
          margin-bottom: 2%;
        }
    </style>
</head>

<body>
<nav class="navbar bg-body-tertiary fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand">LIFE_SAVER</a>
    <div class="button-container">
    <button type="button" class="btn btn-primary log" href="login.php">Login</button>
    <!-- <button type="button" class="btn">Base class</button> -->
    <button type="button" class="btn btn-danger reg" href="register.php">Register</button>
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">LIFE_SAVER</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Index</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Programs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Get Involved</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Donor
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Contact us</a></li>
            </ul>
          </li>
        </ul>
        <!-- <form class="d-flex mt-3" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form> -->
      </div>
    </div>
  </div>
</nav>
<section class="hero d-flex align-items-center text-center" style="background-image:url(images/blood_don.jpg)">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <br><br><br>
        <h1>Welcome to LIFE_SAVER</h1>
        <p class="lead">Your opportunity to be a hero: Donate Blood, Save Lives.</p>
        <p class="intro-text">Every drop counts. At LIFE_SAVER, we believe in the power of humanity and the strength of unity. Join us in our mission to ensure that no life is lost due to a shortage of blood. Whether you're a first-time donor or a regular contributor, your generosity makes a life-saving difference. Together, let's make a meaningful impact and spread hope to those in need.</p>
        <div class="mt-4">
          <a href="register.php" class="btn btn-primary btn-lg reg">Register as Donor</a>
          <!-- <a href="login.php" class="btn btn-primary btn-lg">Login</a> -->
        </div>
      </div>
      <!-- <div class="col-lg-12">
        <img src="images/1676532161463.jpg" class="img-responsive" alt="Donate blood Save life">
      </div> -->
    </div>
  </div>
</section>
<section id="abt-us" class="py-5">
<div class="container">
  <div class ="row">
    <div class="col-lg-6">
        <img src="images/abtus.jpg" class="img-fluid" alt="Donate blood Save life">
    </div>
    <div class="col-lg-6">
      <div class="about-content">
        <h2 class="section-heading mb-4">About Me</h2>
        <p class="lead">At LIFE_SAVER, we are dedicated to saving lives through blood donation. Our organization was founded with a simple yet powerful mission: to ensure that no life is lost due to a shortage of blood. Since our inception, we have been working tirelessly to connect donors with patients in need, bridging the gap between generosity and necessity.</p>
        <p>Our team consists of passionate individuals who believe in the power of humanity and the impact of collective action. Together, we strive to make a difference in the lives of those facing medical emergencies, providing them with the vital support they need to overcome challenges and thrive.</p>
        <p>Through our network of blood donors, medical professionals, and volunteers, we aim to create a community where compassion knows no bounds. We welcome individuals from all walks of life to join us in our noble cause, whether as donors, volunteers, or advocates for blood donation.</p>
        <p>Join us today and become a part of our mission to save lives, one donation at a time.</p>
      </div>
    </div>
  </div>
</div>
</section>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>  
</body>
</html>