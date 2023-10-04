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
            <?php 
               include "userheader.php";
               ?> 
	<section class="ftco-section">
    <div class="container">
                <div class="row justify-content-center">
                    <table class="table">
                        <thead>
                            <tr>
                                <td>firstName</td>
                                <td>lastname</td>
                                <td>email</td>
                                <td>address</td>
                                <td>city</td>
                                <td>contact</td>
                        </thead>
                        <?php echo "Edit ",$username,"'s Account";?> 
                        
                        <?php                      
                        $sql = "SELECT * FROM users where username = '$username'";
                        $result = $conn->query($sql);
                        while ($row= $result->fetch_assoc()):?>
                        <tr>
                            <td><?php echo $row['firstname']; ?> </td>
                            <td><?php echo $row['lastname']; ?> </td>
                            <td><?php echo $row['password']; ?> </td>
                            <td><?php echo $row['email']; ?> </td>
                            <td><?php echo $row['address']; ?> </td>
                            <td><?php echo $row['city']; ?> </td>
                            <td><?php echo $row['contact']; ?> </td>
                            <td>

                        </td>
                        </tr>
                        <?php endwhile;?>
                        </table>
                        </div>
                        </div>
		<div class="container">

			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="login-wrap p-4 p-md-5">
			      	<div class="d-flex">
			      	<div class="w-100">
			      	<h3 class="mb-7">Edit Account Details</h3>
			      	</div>
								<div class="w-100">
									<p class="social-media d-flex justify-content-end">
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
					 					<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
									</p>
								</div>
			      	</div>
							<form action=" " method="post" class="signin-form">
                            <div class="form-group mb-3">
                                    <label class="label" for="username">username</label>
                                  <input type="text" class="form-control" placeholder="username" name="username" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="firstName">New First Name</label>
                                  <input type="text" class="form-control" placeholder="First Name" name="first_name" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="lastName">New Last Name</label>
                                  <input type="text" class="form-control" placeholder="Last Name" name="last_name" required>
								</div>
                                <div class="form-group mb-3">
                                    <label class="label" for="password">New Password</label>
                                <input type="password" class="form-control" placeholder="Password" name="password" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="email">New Email</label>
                                    <input type="email" class="form-control" placeholder="Email" name="email" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="address">New Address</label>
                                <input type="text" class="form-control" placeholder="Address" name="address" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="city">New City</label>
                                <input type="text" class="form-control" placeholder="City" name="city" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="contact">New contact</label>
                                <input type="number" class="form-control" placeholder="Contact" name="contact" required>
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="update" class="form-control btn btn-outline-dark rounded submit px-3">
                                </div>
		          </form>
		          
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

    <?php
    if($username==$_POST['username']){
        include "update.php";
    }else{
    echo "??? insert your username!";
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


