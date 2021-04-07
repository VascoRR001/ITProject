<?php

include('../server.php');

if (empty($_SESSION['username'])) {
    header('location: login.php');
}

if (isset($_POST['update_post'])) {

    $id = mysqli_real_escape_string($db, $_POST['post_id']);
    $title = mysqli_real_escape_string($db, $_POST['title']);
    $imageToUpload = $_FILES['imageToUpload']['name'];
    $short_desc = mysqli_real_escape_string($db, $_POST['short_desc']);
    $long_desc = mysqli_real_escape_string($db, $_POST['long_desc']);

    $target_dir = "img/";
    $target_file = $target_dir . basename($_FILES["imageToUpload"]["name"]);

    move_uploaded_file($_FILES["imageToUpload"]["tmp_name"], $target_file);

    $query = "UPDATE tbl_exp_dest SET 
            title='$title',
            images='$imageToUpload',
            short_desc='$short_desc',
            long_desc='$long_desc'  
            WHERE id='$id'";

    if (mysqli_query($db, $query)) {
        echo "Record updated successfully";
        header('location: dashboard.php');
    } else {
        echo "Error updating record: " . mysqli_error($db);
    }
}


?>

<?php $base_url = "http://" . $_SERVER['SERVER_NAME'] . ':8081/discover-nepal/'; ?>

<?php include_once '../include/headerDashboard.php'; ?>
<section class="padding-9">
    <div class="container">
        <div class="row">
            <div class="container">

                <?php
                $id = $_GET['id'];

                // Fetch Data
                $query = "SELECT * FROM tbl_exp_dest WHERE id=" . $id;

                $results = mysqli_query($db, $query);

                $rowcount = mysqli_num_rows($results);

                if ($rowcount >= 0) {
                    $row = mysqli_fetch_array($results);
                }
                ?>
                <div class="crumbs">
                    <ul class="breadcrumb">
                        <i class="fa fa-home"></i>
                        <li><a href="../dashboard.php">Dashboard</a></li>

                    </ul>
                </div>
                <form method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" class="form-control" name="title" value="<?php echo $row['title'] ?>" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Image</label>
                        <input type="file" name="imageToUpload" id="imageToUpload" class="form-control" >
                        <img src="<?= $base_url . 'img/' . $row['images']; ?>" width="100" height="100" /> </br>

                    </div>

                    <div class="mb-3">
                        <label class="form-label">Tagline</label>
                        <textarea class="form-control" name="short_desc" required><?php echo $row['short_desc'] ?></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea class="form-control" name="long_desc" required><?php echo $row['long_desc'] ?></textarea>
                    </div>

                    <div class="col-md-12">
                        <input type="hidden" name="post_id" value="<?php echo $id ?>">
                        <button type="submit" name="update_post" value="Submit" class="button">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
</body>

</html>