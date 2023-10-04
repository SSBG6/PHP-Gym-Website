<?php
    include "config.php";
    session_start();
    if (isset($_SESSION['username'])) {
        $username = $_SESSION['username'];
    } else {
        $username = '';
    };
 ?>  
<html>
    <head>
        <meta charset="UTF-8">
        <title>
            One Gym
        </title>
        <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>  
    <link href="css/styles1.css" />  
  </head>
    <body>
        <header class="site-header py-3">
            <nav class="container d-flex flex-column flex-md-row justify-content-between">
                <div class="position-relative text-center bg-light">
                <a href="#" class="navbar-brand mb-0 h1" style="color:black;">
               <img src="logo2.png" width=10%/>
               The One Gym
                </a>
                <p class="lead fw-normal">The One For All Your Fitness Needs.</p>
                <div class="py-3 container">
                <a class="fs-6 btn d-md-inline-block btn-outline-dark" href="addpro.php">Add Products</a>
                <a class="fs-6 btn d-md-inline-block btn-outline-dark" href="checkout.html">Edit Products</a>
                <a class="fs-6 btn d-md-inline-block btn-outline-dark" href="#">Add Classes</a>
                <a class="fs-6 btn d-md-inline-block btn-outline-dark" href="#">Edit Classes</a>
                <a class="fs-6 btn d-md-inline-block btn-outline-dark" href="#">Membership</a>
                <a class="fs-6 btn d-md-inline-block btn-outline-dark" href="checkout.html">Orders</a>
                <a class="fs-6 btn d-md-inline-block btn-outline-dark" href="logout.php">Log out</a>
                </div>
                </div>    
            </nav>
          </header>
            <div class="container ">
                <h1 class="text-primary" >Edit Profile</h1>
                <hr>
                <div class="row">
                 
                <!-- edit form column -->                
                    <div class="container d-flex flex-column flex-md-row justify-content-between">
                    <form action=" " method="post" class="signin-form">
                                <div class="form-group mb-3">
                                   
                                  <!-- <input type="" class="form-control" placeholder="username" name="username" required> -->
                                </div>
                                <!-- <div class="form-group mb-3">
                                    <label class="label" for="firstName">First Name</label>
                                  <input type="text" class="form-control" placeholder="First Name" name="first_name" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="lastName">Last Name</label>
                                  <input type="text" class="form-control" placeholder="Last Name" name="last_name" required>
								</div>
                                <div class="form-group mb-3">
                                    <label class="label" for="password">Password</label>
                                <input type="text" class="form-control" placeholder="Password" name="password" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="email">Email</label>
                                    <input type="text" class="form-control" placeholder="Email" name="email" required>
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
                                <input type="text" class="form-control" placeholder="Contact" name="contact" required>
                                </div>-->
                                <!-- <div class="form-group"> -->
                                    <!-- <input type="submit" class="form-control btn btn-outline-dark rounded submit px-3"> -->
                                <!-- </div>  -->
		          </form>
                                </div>
                </div>
            </div>
            </div>
            <hr>
            <!-- left column -->
                <?php
                include("config.php");
                $username = $_SESSION['username'];
                    //read from database
                    //$sql = "select * from users where username = $_SESSION['username']";
                    //$result = $conn->query($sql);
        
                ?>
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
                        <?php
                        $sql = "SELECT * FROM users where username = '$username'";
                        $result = $conn->query($sql);
                        while ($row= $result->fetch_assoc()):?>
                        <tr>
                            <td><?php echo $row['firstname']; ?> </td>
                            <td><?php echo $row['lastname']; ?> </td>
                            <td><?php echo $row['email']; ?> </td>
                            <td><?php echo $row['address']; ?> </td>
                            <td><?php echo $row['city']; ?> </td>
                            <td><?php echo $row['contact']; ?> </td>
                            <td>
                                <input type="submit" name="submit" value="Submit" class="buttom">
                                <a href="edit.php?delete=<?php echo $row['username'];?>"
                                class="btn btn-danger">delete </a>

                        </td>
                        </tr>
                        <?php endwhile;?>
                        </table>
                        </div>
                        </div>
                        <div class="form-group mb-3" method="post">
                                    <label class="label" for="firstName">First Name</label>
                                  <input type="text" class="form-control" placeholder="First Name" name="first_name" value=<?php echo $firstname;?> >
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="lastName">Last Name</label>
                                  <input type="text" class="form-control" placeholder="Last Name" name="last_name" value=<?php echo $last_name;?>>
								</div>
                                <div class="form-group mb-3">
                                    <label class="label" for="password">Password</label>
                                <input type="text" class="form-control" placeholder="Password" name="password"value=<?php echo $password;?> >
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="email">Email</label>
                                    <input type="text" class="form-control" placeholder="Email" name="email" value=<?php echo $email;?>>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="address">Address</label>
                                <input type="text" class="form-control" placeholder="Address" name="address"value=<?php echo $address;?> >
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="city">City</label>
                                <input type="text" class="form-control" placeholder="City" name="city" value=<?php echo $city;?>>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="contact">contact</label>
                                <input type="text" class="form-control" placeholder="Contact" name="contact" value=<?php echo $contact;?>>
                                </div>
                        <?php     
                        if(count($_POST)>0) {
                            mysqli_query($conn,"UPDATE users SET firstname='$firstname', lastname='$last_name', email='$firstname', address='$address', city='$city', contact='$contact' where username = '$username'");
                            $message = "Record Modified Successfully";
                            }                       
                        ?>
                        
            <footer class="my-5 pt-5 text-muted text-center text-small">
                <p class="mb-1">The One Gym</p>
            </footer>
        </body>
    </html>