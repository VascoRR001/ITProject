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

<?php include_once 'include/headerDashboard.php'; ?>
    <!-- <div>
        <form method="post">
            <input type="submit" name="logout" value="Log Out">
        </form>
    </div>
<h1 class="text-center">You're Logged In!</h1> -->
<div class="clearfix"></div>
<section  class="padding-9">
<div class="container">
<div class="crumbs">
<ul class="breadcrumb">
    <i class="fa fa-home"></i>
  <li><a href="#">Dashboard</a></li>
  
</ul>
</div>
<div class ="dashboard-menu">
    <a href= "destination" class='button' > <i class="fa fa-plus"></i>Blog </a>
    <a href="aboutUs" class='button' > <i class="fa fa-plus"></i>About Us </a>
    <a href="destination" class='button' > <i class="fa fa-plus"></i>Destinations </a>
    <a href="#" class='button' > <i class="fa fa-plus"></i>Contact Us </a>
</div>
</div>
</section>
<?php include_once 'include/footer.php'; ?>

