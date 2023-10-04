<!doctype html>
<html lang="en">
	<title>
		One Gym 
	</title>
  <head>
  	<title>Login 04</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
    <?php

include "config.php";

?>
	<section class="ftco-section">
		<div class="container">

			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="login-wrap p-4 p-md-5">
			      	<div class="d-flex">
			      	<div class="w-100">
			      	<h3 class="mb-7">Sign Up</h3>
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
                                    <label class="label" for="username">Username</label>
                                  <input type="text" class="form-control" placeholder="username" name="username" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="firstName">First Name</label>
                                  <input type="text" class="form-control" placeholder="First Name" name="first_name" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="lastName">Last Name</label>
                                  <input type="text" class="form-control" placeholder="Last Name" name="last_name" required>
								</div>
                                <div class="form-group mb-3">
                                    <label class="label" for="password">Password</label>
                                <input type="password" class="form-control" placeholder="Password" name="password" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="email">Email</label>
                                    <input type="email" class="form-control" placeholder="Email" name="email" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="address">Address</label>
                                <input type="text" class="form-control" placeholder="Address" name="address" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="city">City</label>
                                <input type="text" class="form-control" placeholder="City" name="city" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="contact">contact</label>
                                <input type="number" class="form-control" placeholder="Contact" name="contact" required>
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="form-control btn btn-outline-dark rounded submit px-3">
                                </div>
		          </form>
		          <p class="text-center">Already a member? <a data-toggle="tab" href="index.php">Log in</a></p> <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>
  <?php
// Set session variables
$_SESSION["username"] = "green";
echo "Session variables are set.";
?>
    <?php
                
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
        
        // Taking all 5 values from the form data(input)
        $username = $_REQUEST['username'];
        $first_name =  $_REQUEST['first_name'];
        $last_name =  $_REQUEST['last_name'];
        $password =  $_REQUEST['password'];
        $email =  $_REQUEST['email'];
        $address =  $_REQUEST['address'];
        $city =  $_REQUEST['city'];
        $contact =  $_REQUEST['contact'];

        // Performing insert query execution
        $sql = "INSERT INTO users   VALUES ('$username','$first_name',
        '$last_name',
        '$password',
        '$email',
        '$address',
        '$city',
        '$contact')";
        //
        if(mysqli_query($conn, $sql)){
            ?>
            <script>alert(Account Created successfully.)</script>
            
            <?php
            
            echo nl2br("\n$first_name\n $last_name\n "
                . "$contact\n $address\n $email");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
        
        // Close connection
        mysqli_close($conn);
        echo '<script>alert("Account created successfully. Click login buttton")</script>';
        function Redirect($url, $permanent = false)
        {
            if (headers_sent() === false)
            {
                header('Location: ' . $url, true, ($permanent === true) ? 301 : 302);
            }

            exit();
        }

        Redirect('index.php', false);
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


