<?php $db = mysqli_connect('localhost', 'root', '', 'discover_nepal');?>

<?php include_once 'include/header.php'; ?>

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
  
  <?php include_once 'include/footer.php'; ?>
