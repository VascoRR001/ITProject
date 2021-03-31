<?php $db = mysqli_connect('localhost', 'root', '', 'discover_nepal');?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo ("Discover Nepal") ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
  <link href="css/custom.css" rel="stylesheet">
</head>
<body>
  <!--Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark  fixed-top">
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
            <a class="nav-link" href="#padding">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">Destinations</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#blog">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#footer">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Login/SignUp</a>
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

  <div id="padding">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-md-6 second-section">
          <img src="img/temples.jpg">
        </div>
        <div class="col-xs-12 col-md-6 second-section">
          <h2><?php echo "Discover Nepal"?></h2>
          <p class="lead">"Nepal" is one of the fast growing tourism destination</p>
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
      <?php
        // Fetch Data
        $query = "SELECT * FROM tbl_exp_dest"; 

        $results = mysqli_query($db, $query);

        $rowcount=mysqli_num_rows($results);
      
        if ($rowcount >= 0) {
            while ($row = mysqli_fetch_array($results)) {
                $id = $row['id'];
                $title = $row['title'];
                $images = $row['images'];
                $short_desc = $row['short_desc'];
                $long_desc = $row['long_desc'];
    
                echo
                ' <div class="col-xs-12 col-md-3 item section-about">
                    <div class="block">
                      <a href="#"><img src="img/'.$images.'" class="img-destinations"></a>
                      <figcaption>
                        <h4 align="center"><u>'. $title .'</u></h4>
                      </figcaption>
                      <div class="countries_desc">
                        <p> '. $short_desc .' <a href="#" class="readmore"><i>Read More>> </i></a></p>
                      </div>
                    </div>
                  </div>
                ';
            }
        }else {
            array_push($errors, "Nothing in database");
        }
    ?>
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
  
  <!--Footer-->
  <div id="footer">
    <div class="container">
      <div class="row services">
        <div class="col-xs-12 col-md-4 item section-footer">
          <h3>About Discover Nepal</h3>
          <p>We love our country and the Himalayas and we know that there is much more than you can see in a "guidebook". Don't hesitate to talk with us, to ask whatever you want to know, any doubt you have. We enjoy answering your questions and we suggest some options to you. We enjoy guiding you.</p>
        </div>
        <div class="col-xs-12 col-md-4 item section-footer">
          <h3>Contact</h3>
          <div class="subfooter1">
            <b>Address :</b> Maitidevi-32, Kathmandu</br>
            <b>E-mail :</b> info@discovernepal.com.np</br>
            <b>Telephone :</b> 01-6201274, 01-4421274</br>
            <b>Cellphone : </b>+977-9851075274</br>
          </div>    
        </div>
        <div class="col-xs-12 col-md-4 item section-footer">
          <h3>Quick Links</h3>
          <ul>
            <li><a href="#Using_Lists_for_Menus">Jungle Safari</a></li>
            <li><a href="#Using_Lists_for_Menus">Bungy Jump</a></li>
            <li><a href="#Using_Lists_for_Menus">Mardi Trek</a></li> 
            <li><a href="#Using_Lists_for_Menus">Everest Base Camp Trek</a></li>
            <li><a href="#Using_Lists_for_Menus">Pokhara City Tour</a></li>
            <li><a href="#Using_Lists_for_Menus">Kathmandu City Tour</a></li>
          </ul> 
        </div>
      </div>
    </div>
  </div>
  <!--Footer Section Ends here-->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"
    integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"
    integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG"
    crossorigin="anonymous"></script>
    <script src="js/smooth-scroll.js"></script>
        <script>
          var scroll = new SmoothScroll('a[href*="#"]');
        </script> 
</body>
</html>

