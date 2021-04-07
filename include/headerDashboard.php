<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo ("Discover Nepal") ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
  <link href="<?php echo "http://".$_SERVER['SERVER_NAME'].':8081/discover-nepal/css/custom.css' ?>" rel="stylesheet">
</head>
<body>
<header>
  <?php $image_url = "http://".$_SERVER['SERVER_NAME'].':8081/discover-nepal/img/flag.gif';?>
  <!--Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark  fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#"><img src="<?= $image_url; ?>" alt="logo" class="header-flag"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link"  href="mailto: sushmi2468@gmail.com ?body= problem in dashboard">Report a problem</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Login/SignUp</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>
  </header>
  <!--Navigation Ends here-->