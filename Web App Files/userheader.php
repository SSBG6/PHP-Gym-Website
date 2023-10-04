<?php
            if (isset($_SESSION['username'])) {
                  $username = $_SESSION['username'];
                  echo "   ",$username, " Logged in.";
              }
            else {
               $username = '';
               };  
                if($_SESSION['username'] = $username){
                ?>
                <header class="header">
   <nav class="container d-flex flex-column flex-md-row ">
              <a href="#" class="navbar-brand mb-0 h1" style="color:black;">
               <img src="logo2.png" width=10%/>
               The One Gym
                </a>
       <!-- <section class="flex">
      <div class="py-3 container">  -->
         <div><a class="fs-6 btn d-inline-block btn-outline-dark" href="product.php">Products</a> </div>
         <div>     <a class="fs-6 btn d-md-inline-block btn-outline-dark" href="class.php">Classes</a> </div>
         <div>    <a class="fs-6 btn d-md-inline-block btn-outline-dark" href="membership.php">Membership</a> </div>
         <div>    <a class="fs-6 btn d-md-inline-block btn-outline-dark" href="searchp.php">Search</a> </div>
                <div class="dropdown">
                  <button class="fs-6 btn d-inline-block btn-outline-dark dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                  Account
                  </button>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                     <li><a class="dropdown-item" href="managemem.php">Manage Membership</a></li>
                     <li><a class="dropdown-item" href="cart.php">Cart/Checkout</a></li>
                     <li><a class="dropdown-item" href="edits.php">Edit account</a></li>
                     <li><a class="dropdown-item" href="logout.php">log out</a></li>
                  </ul>
                </div>
         <!-- </div>
      </section>  -->
   </nav>
</header> 
                <?php
                }else {
                  ?>
                  <header class="header">
   <nav class="container d-flex flex-column flex-md-row justify-content-between">
              <a href="#" class="navbar-brand mb-0 h1" style="color:black;">
               <img src="logo2.png" width=10%/>
               The One Gym
                </a>
      <section class="flex">
      <div class="py-3 container">
      <div><button class="fs-6 btn d-inline-block btn-outline-dark" href="product.php">Products</button> </div>
         <div>     <a class="fs-6 btn d-md-inline-block btn-outline-dark" href="class.php">Classes</a> </div>
         <div>    <a class="fs-6 btn d-md-inline-block btn-outline-dark" href="membership.php">Membership</a> </div>
         <div>    <a class="fs-6 btn d-md-inline-block btn-outline-dark" href="searchp.php">Search</a> </div>
                <div class="dropdown">
                  <button class="fs-6 btn d-inline-block btn-outline-dark dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                     Log in | Sign up 
                  </button>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                     <li><a class="dropdown-item" href="index.php">Log in</a></li>
                     <li><a class="dropdown-item" href="signup.php">Sign Up</a></li>
 
                  </ul>
                </div>
         </div>
      </section>
   </nav>
</header> 
                  <?php
                  }