<!DOCTYPE html>
<html>


<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo ("Discover Nepal") ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link href="css/custom.css" rel="stylesheet">
</head>
<body>
  <!--Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#"><img src="img/flag.gif" alt="logo" class="header-flag"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#"><?php echo "Home"?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Destinations</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">News</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact Us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--Navigation Ends here-->

  <!--Image Banner-->
  <div id="banner">
    <img src="img/boudha.jpg" alt="#" class="img-responsive">
  </div>

  <div class="padding">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-md-6 second-section">
          <img src="img/temples.jpg">
        </div>
        <div class=" col-xs-12 col-md-6 text-center second-section">
          <h2><?php echo "Discover Nepal"?></h2>
          <p class="lead"><?php echo "Nepal is one of the fast growing tourism destination"?></p>
          <p class="lead">The ideology is to provide complete information about geographical location, natural beauty and scenary of Nepal. This portal aims to give information about the preparation 
            to be done before visiting Nepal.</p>
            <p class="lead">Sagarmatha National Park, Kathmandu Valley, Chitwan National Park, Lumbini the Birthplace of the Lord Buddha 
              are four sites listed by UNESCO world heritage from Nepal </p>
        </div>
      </div>
    </div>
  </div>

  <div id="about">
    <div class="container">
      <h2 class="text-center">Explore Destinations</h2>
      <div class="row">
        <div class="col-xs-12 col-md-3 item section-about">
          <div class="block">
            <a href="#"><img src="img/lumbini.jpg" class="img-destinations"></a>
            <figcaption>
              <h4 align="center"><u><?php echo"Lumbini"?></u></h4>
            </figcaption>
            <div class="countries_desc">
              <p>Lumbini is Birth place of Lord Buddha. Lumbini is the foundation of world peace and pilgrimage for all peace loving people, bearing significance to the life, enlightenment and <a href="#" class="readmore"><i>Read More>> </i></a></p>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-md-3 item section-about">
          <div class="block">
            <a href="#"><img src="img/everest.jpg" class="img-destinations"></a>
            <figcaption>
              <h4 align="center"><u>Mount Everest</u></h4>
            </figcaption>
            <div class="countries_desc">
              <p>Mount Everest is Earth's highest mountain above sea level, located in the Mahalangur Himal sub-range of the Himalayas. Its elevation of 8,849 m. <a href="#" class="readmore"><i>Read More>> </i></a></p>
              
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-md-3 item section-about">
          <div class="block">
            <a href="#"><img src="img/patan.jpg" class="img-destinations"></a>
            <figcaption>
              <h4 align="center"><u>PATAN </u></h4>
            </figcaption>
            <div class="countries_desc">
              <p>It is one of the three Durbar Squares in the Kathmandu Valley. One of its attraction is the ancient royal palace where the Malla Kings of Lalitpur resided. <a href="#" class="readmore"><i>Read More>> </i></a></p>     
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-md-3 item section-about">
          <div class="block">
            <a href="#"><img src="img/pokhara.jpg" class="img-destinations"></a>
            <figcaption>
              <h4 align="center"><u>POKHARA</u></h4>
            </figcaption>
            <div class="countries_desc">
              <p>In Pokhara you can experience the excitement of adventure: boating, hiking, paragliding, bungee, zipline or simply relaxing at one of the several lakes in the valley. <a href="#" class="readmore"><i>Read More>> </i></a></p>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!--Blog section-->
  <div id="blog">
    <div class="container">
      <h2 class="text-center">Our Blog</h2>
      <div class="row">
        <div class="col-xs-12 col-md-4 item section-blog">
          <div class="grid">
            <a href="#"><img src="img/Paragliding.jpg" class="img-blog"></a>
            <figcaption>
              <h4 align="center" class="blog-description"><a href="#">Adventurous Activities In Nepal</a></h4>
            </figcaption>
          </div>
        </div>
        <div class="col-xs-12 col-md-4 item section-blog">
          <div class="grid">
            <a href="#"><img src="img/thakali.jpg" class="img-blog"></a>
            <figcaption>
              <h4 align="center" class="blog-description"><a href="#">The Taste of Nepal</a></h4>
            </figcaption>
          </div>
        </div>
        <div class="col-xs-12 col-md-4 item section-blog">
          <div class="grid">
            <a href="#"><img src="img/festival1.jpg" class="img-blog"></a>
            <figcaption>
              <h4 align="center" class="blog-description"><a href="#">What To See In Nepal?</a></h4>
            </figcaption>
          </div>
        </div>
      </div>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"
    integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"
    integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG"
    crossorigin="anonymous"></script>
    
</body>

</html>