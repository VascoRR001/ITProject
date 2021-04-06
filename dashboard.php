<?php

include('server.php');

if (empty($_SESSION['username'])){
    header('location: login.php');
}

if (isset($_POST['logout'])){
    session_destroy();
    header('location: login.php');
}

if (isset($_POST['delete_post'])){
    $id = $_POST['post_id'];
    $query = 'DELETE FROM tbl_exp_dest WHERE id = '.$id;

    if (mysqli_query($db, $query)) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . mysqli_error($db);
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
    <div>
        <form method="post">
            <input type="submit" name="logout" value="Log Out">
        </form>
    </div>
<h1 class="text-center">You're Logged In!</h1>

<div class="container">
<table class="table table-striped table-dark">
  <thead>
    <tr>
        <th colspan=4>
            <form method="post" action="dashboard-add.php">
                <!-- <label for="disc_npl">Select to add category:</label>
                <select name="disc_npl" id="disc_npl">
                    <option value="0">---------------</option>
                    <option value="1">Discovery Nepal</option>
                    <option value="2">Explore Destinations</option>
                    <option value="3">Blog</option>
                </select> -->
                <input type="hidden" name="add_dis_npl" value="ADD">
                <input type="submit" name="add_exp_dest" value="ADD">
                <input type="hidden" name="add_blog" value="ADD">
                <!-- <input type="submit" value="Submit"> -->
            </form>
        </th>
    </tr>
  </thead>
  <tbody>
  <tr>
        <th width="100">S.no</th>
        <th width="200">Title</th>
        <th width="200">Image</th>
        <th width="200">Action</th>
    </tr>
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
                '<tr>
                    <th width="100">'. $id .'</th>
                    <th width="200">'. $title .'</th>
                    <th width="200"> <img src="img/'.$images.'" width="70" height="70" /> </th>
                    <th width="200">
                        <form method="post" action="dashboard-edit.php">
                            <input type="hidden" name="post_id" value='.$id.'>
                            <input type="submit" name="edit_post" value="Edit">
                        </form>    
                        
                        <form method="post">
                            <input type="hidden" name="post_id" value='.$id.'>
                            <input type="submit" name="delete_post" value="Delete">
                        </form>
                     </th>
                </tr>';
            }
        }else {
            array_push($errors, "Nothing in database");
        }
    ?>

</table>
</body>
</html>

