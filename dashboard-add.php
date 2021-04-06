<?php

include('server.php');

if (empty($_SESSION['username'])){
    header('location: login.php');
}

if (isset($_POST['add_post'])){
    
    $title = mysqli_real_escape_string($db, $_POST['title']);
    $imageToUpload = $_FILES['imageToUpload']['name'];
    $short_desc = mysqli_real_escape_string($db, $_POST['short_desc']);
    $long_desc = mysqli_real_escape_string($db, $_POST['long_desc']);

    $target_dir = "img/";
    $target_file = $target_dir . basename($_FILES["imageToUpload"]["name"]);


    move_uploaded_file($_FILES["imageToUpload"]["tmp_name"], $target_file);

    $query = "INSERT INTO tbl_exp_dest (title, images, short_desc, long_desc) 
  			  VALUES('$title', '$imageToUpload', '$short_desc', '$long_desc')";

    if (mysqli_query($db, $query)) {
        echo "Record added successfully";
        header('location: dashboard.php');
    } 
    else {
        echo "Error adding record: " . mysqli_error($db);
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo ("Discover Nepal") ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
  <link href="css/custom.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="container">

            <form method="post" enctype="multipart/form-data">
                <h3> <label for="disc_npl">Add Explorer Destination:</label> </h3>
                <a href="dashboard.php"> Back to Dashboard </a>
                <div class="col-md-12">
                    <input type="text" name="title">
                </div>

                <div class="col-md-12">
                    <input type="file" name="imageToUpload" id="imageToUpload">
                </div>

                <div class="col-md-12">
                    <textarea cols="70" rows="6" name="short_desc"></textarea>
                </div>
                
                <div class="col-md-12">
                    <textarea cols="70" rows="6" name="long_desc"></textarea>
                </div>
                
                <div class="col-md-12">
                    <input type="submit" name="add_post" value="Submit">
                </div>
            </form>
        </div> 
    </div>

</body>
</html>

