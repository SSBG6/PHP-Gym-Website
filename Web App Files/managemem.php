<!doctype html>
<html lang="en">
	<title>
		One Gym 
	</title>
  <head>
  	<title>Edit Profile</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
    <?php

include "config.php";
    session_start();
    if (isset($_SESSION['username'])) {
        $username = $_SESSION['username'];
    } else {
        $username = '';
    };
?>
    <div class="position-relative text-center bg-light">
                <h1 class="display-4 fw-normal">Edit Membership</h1>
                <p class="lead fw-normal">The One For All Your Fitness Needs.</p>
                <?php 
                    include "userheader.php";
                ?>
                </div> 
                <div class="container">
                <div class="row justify-content-center">
                    <table class="table">
                        <thead>
                            <tr>
                                <td>Username</td>
                                <td>Membership</td>
                                
                        </thead>
                        
                        
                        <?php
                        
                        
                        if (isset($_SESSION['username'])) {
                            $username = $_SESSION['username'];
                        } else {
                            $username = '';
                        };
                        if($conn === false){
                        die("ERROR: Could not connect. "
                        . mysqli_connect_error());}                      
                        $sql = "SELECT * FROM membership where username='$username'";
                        $result = $conn->query($sql);
                        while ($row= $result->fetch_assoc()):?>
                        <tr>
                            <td><?php echo $row['username']; ?> </td>
                            <td><?php echo $row['plan']; ?> </td>
                            
                            <td>

                        </td>
                        </tr>
                        <?php endwhile;?>
                        </table>
                        </div>
                        </div>
                <div class="row">
                    <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
                    <div class="tm-bg-primary-dark tm-block tm-block-h-auto">

                        <div class="row">
                        <div class="col-12">
                        <form action="" method="post" class="tm-edit-product-form">
                                
                        
                            </div>
                        </div>
                        </div>
                            <button type="submit" name="delete" class="btn btn-danger  btn-lg btn-block text-uppercase">Remove my membership</button>

                        </div>
                        </form>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
                <?php
                if (isset($_POST['delete'])) {
                    $sql = "DELETE FROM membership WHERE username = '$username'";
                } else {
                    //echo "Nothing was posted";
                }
                //kaboom the product will be gone
                if (mysqli_query($conn, $sql)) {
                    //echo "Product deleted successfully";
                } else {
                    //echo "Error updating record: " . mysqli_error($conn);
                }
                
               
    ?>       
	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
  		<footer class="my-5 pt-5 text-muted text-center text-small">
		<p class="mb-1">The One Gym</p>
		</footer>
   
	</body>
</html>


