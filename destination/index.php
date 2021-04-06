<?php

include('../server.php');

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
<?php $base_url = "http://".$_SERVER['SERVER_NAME'].':8081/discover-nepal/';?>

<?php include_once '../include/headerDashboard.php'; ?>
<section  class="padding-9">
    <div class="container">
        
<table class="table table-striped ">
  <thead>
    <tr>
        <th colspan=4>
            <form method="post" action="dashboard-add.php">
                </select>
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
        $rows = array();
        while($row = mysqli_fetch_array($results))
             $rows[] = $row;
        foreach($rows as $row){
        ?>
        <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['title'] ?></td>
            <td ><img src= "<?= $base_url.'/img/'.$row['images']; ?>" class="img-table"></td>
            <td><a href="edit.php "><i class="fas fa-edit"></i></a>
            <a href="#"> <i class="fas fa-trash-alt"></i></a></td>
            
        </tr>

        <?php }?>

</table>
    </div>
</section>