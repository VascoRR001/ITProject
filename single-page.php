<?php $db = mysqli_connect('localhost', 'root', '', 'discover_nepal');?>

<?php include_once 'include/header.php' ?>

        <div class="single-box">
            <div class="container">
                <div class="row">

                <?php
                    if (isset($_GET['id'])){
                            $id = $_GET['id'];

                            // Fetch Data
                            $query = "SELECT * FROM tbl_exp_dest WHERE id=".$id; 

                            $results = mysqli_query($db, $query);

                            $rowcount=mysqli_num_rows($results);
                        
                            if ($rowcount >= 0) {
                                $row = mysqli_fetch_array($results);
                            }

                            echo
                            '<div class="col-md-12 col-12">
                                <div class="image">
                                    <div class="bg-image.box">
                                        <img src="img/'.$row["images"].'" alt="#" class="img-responsive">
                                    </div>
                                </div>
                                <div class="description">
                                    <h2>'.$row["title"].'  </h2>
                                    <p>
                                    '.nl2br($row["long_desc"]).'
                                    </p>
                                </div>
                            </div>';  
                    }
                ?>
                     
                </div>
            </div>   
        </div>  
    
<?php include_once 'include/footer.php' ?>
