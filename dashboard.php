<?php

include('server.php');

if (empty($_SESSION['username'])){
    header('location: login.php');
}

if (isset($_POST['logout'])){
    session_destroy();
    header('location: login.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <div>
        <form method="post">
            <input type="submit" name="logout" value="Log Out">
        </form>
    </div>
<h1> Welcome to Dashboard </h1>

<table border=1>
    <tr>
        <th colspan=4>
            <form method="post">
                <label for="disc_npl">Select to add category:</label>
                <select name="disc_npl" id="disc_npl">
                    <option value="0">---------------</option>
                    <option value="1">Discovery Nepal</option>
                    <option value="2">Explore Destinations</option>
                    <option value="3">Blog</option>
                </select>
                <input type="hidden" name="add_dis_npl" value="ADD">
                <input type="hidden" name="add_exp_dest" value="ADD">
                <input type="hidden" name="add_blog" value="ADD">
                <input type="submit" value="Submit">
            </form>
        </th>
    </tr>
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

        if (mysqli_num_rows($results) == 1) {
            while ($row = mysqli_fetch_array($results)) {
                $id = $row['id'];
                $title = $row['title'];
                $short_desc = $row['short_desc'];
                $long_desc = $row['long_desc'];

                echo
                '<tr>
                    <th width="100">'. $id .'</th>
                    <th width="200">'. $title .'</th>
                    <th width="200"> <img src="img/lumbini.jpg" width="70" height="70" /> </th>
                    <th width="200"> Edit | Delete </th>
                </tr>';
            }
        }else {
            array_push($errors, "Nothing in database");
        }
    ?>
</table>

</body>
</html>

