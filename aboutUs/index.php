<?php

include('../server.php');

if (empty($_SESSION['username'])){
    header('location: login.php');
}

if (isset($_POST['logout'])){
    session_destroy();
    header('location: login.php');
}
    $id = $_GET['deleteId'];
    if($id){
        $query = 'DELETE FROM about_us WHERE id = '.$id;

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
            <form method="post" action="create.php">
                <button type="submit" name="add_exp_dest" value="ADD" class="button">New About Us </button>
            </form>
        </th>
    </tr>
  </thead>
  <tbody>
  <tr>
        <th width="100">S.no</th>
        <th width="200">Title</th>
        <th width="200">Description</th>
        <th width="200">Action</th>
    </tr>
    <?php
        $query = "SELECT * FROM about_us"; 

        $results = mysqli_query($db, $query);
        $rows = array();
        while($row = mysqli_fetch_array($results))
             $rows[] = $row;
        foreach($rows as $row){
        ?>
        <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['title'] ?></td>
            <td><?php echo $row['description'] ?></td>
           <td><a href="edit.php?id=<?php echo $row['id']?> "><i class="fas fa-edit"></i></a>
            <a href="?deleteId=<?php echo $row['id']?>"> <i class="fas fa-trash-alt"></i></a></td>
            
        </tr>

        <?php }?>

</table>
    </div>
</section>
