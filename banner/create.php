<?php

include('../server.php');

if (empty($_SESSION['username'])) {
    header('location: login.php');
}

if (isset($_POST['add_post'])) {

    $title = mysqli_real_escape_string($db, $_POST['title']);
    $imageToUpload = $_FILES['imageToUpload']['name'];
    $description = mysqli_real_escape_string($db, $_POST['description']);
    
    $target_dir = "img/";
    $target_file = $target_dir . basename($_FILES["imageToUpload"]["name"]);


    move_uploaded_file($_FILES["imageToUpload"]["tmp_name"], $target_file);

    $query = "INSERT INTO banner (title, image, description) 
  			  VALUES('$title', '$imageToUpload', '$description'')";

    if (mysqli_query($db, $query)) {
        echo "Record added successfully";
        header('location: ../dashboard.php');
    } else {
        echo "Error adding record: " . mysqli_error($db);
    }
}


?>
<?php include_once '../include/headerDashboard.php'; ?>
<section class="padding-9">
    <div class="container">
        <div class="row">
            <div class="container">
                <div class="crumbs">
                    <ul class="breadcrumb">
                        <i class="fa fa-home"></i>
                        <li><a href="../dashboard.php">Dashboard</a></li>

                    </ul>
                </div>
                <section >
                <form method="post" enctype="multipart/form-data">

                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" class="form-control" name="title" required>
                    </div>

                    <div class="mb-3">
                    <label class="form-label">Image</label>
                        <input type="file" name="imageToUpload" id="imageToUpload" class="form-control" required>
                    </div>


                    <div class="mb-3">
                    <label class="form-label">Description</label>
                        <textarea  name="long_desc" class="form-control" required></textarea>
                    </div>

                    <div class="mb-3">
                        <button type="submit" name="add_post" value="Submit" class="button"> Submit </button>
                    </div>
                </form>
                </section>
            </div>
        </div>
    </div>
</section>

</body>

</html>