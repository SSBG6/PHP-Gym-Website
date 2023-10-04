<!doctype html>
<html lang="en">
	<title>
		One Gym
	</title>
  <head>
  	<title>Log in</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
		<div class="position-relative text-center bg-light">
                <h1 class="display-4 fw-normal">THE ONE GYM</h1>
                <p class="lead fw-normal">The One For All Your Fitness Needs.</p>
			
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="img" style="background-image: url(banner2.jpg);">
			      </div>
						<div class="login-wrap p-4 p-md-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">Log In</h3>
			      		</div>
								<div class="w-100">
									<p class="social-media d-flex justify-content-end">
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
									</p>
								</div>
			      	</div>
							<form action="" method="post" class="signin-form">
			      		<div class="form-group mb-3">
			      			<label class="label" for="name">Username</label>
			      			<input type="text" class="form-control" placeholder="Username" name="username" required>
			      		</div>
						<div class="form-group mb-3">
							<label class="label" for="password">Password</label>
							<input type="password" class="form-control" placeholder="Password" name="password" required>
						</div>
		            <div class="form-group">
						<input type="submit" class="form-control btn btn-outline-dark rounded submit px-3">
					</div>
		            <div class="form-group d-md-flex">
		            	<div class="w-50 text-left">
									</div>
									<div class="w-50 text-md-right">

									</div>
		            </div>
		          </form>
		          <p class="text-center">Not a member? <a data-toggle="tab" href="signup.php">Sign Up</a></p>
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
  	<footer class="my-5 pt-5 text-muted text-center text-small">
	<p class="mb-1">The One Gym</p>
	</footer>
	
   <?php 

   session_start();
   
		   include("config.php");
		   $username = $_POST['username'];
		   $password = $_POST['password'];

   
		   if(!empty($username) && !empty($password))
		   {
   
			   //read from database
			   $query = "select * from users where username = '$username'";
			   $result = mysqli_query($conn, $query);
			   $query2 = "select * from admint where username = '$username'";
			   $result2 = mysqli_query($conn, $query2);

				if($result==1 or $result2==1){   
					$user_data = mysqli_fetch_assoc($result);
					$user_data2 = mysqli_fetch_assoc($result2);   
					if($password === $user_data['password']){
						$_SESSION['username'] ="$username";
						header("Location: home.php");
						die;
					}else if($password === $user_data2['password']){
						header("Location: admin.php");
						$_SESSION['username'] ="$username";
					die;}
					else {
						header("Location: index.php");
					die;}
				}				
		   }else{
		   echo "Enter username and password";
		   }
	   
   
   ?>

	</body>
</html>

