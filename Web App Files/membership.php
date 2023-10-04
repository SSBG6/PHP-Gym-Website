<?php

include 'config.php';

if(isset($_SESSION['username'])){
   $username = $_SESSION['username'];
}else{
   $username = '';
};

?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
        
  </head>
    <body>
    <?php
        include "config.php";
        session_start();
        include "membershipfunc.php";
        
        ?>
        <?php 
               include "userheader.php";
               ?> 
             <form action="" method="post" class="tm-edit-product-form">
          <div class="container position-relative text-center ">
                   
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                  <div class="card h-100">
                    <img src="bronzem.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Quarterly</h5>
                      <p class="card-text">LKR 14,000</p>
                      <button type="submit" name="bronze" class="btn d-md-inline-block btn-outline-dark">become a bronze member</button>
                            </button>
                        </div>
                      </div>
                      </div>
                      <div class="col">
                  <div class="card h-100">
                    <img src="silvm.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Bi-anually</h5>
                      <p class="card-text">LKR 25,000</p>
                      <button type="submit" name="silver" class="btn d-md-inline-block btn-outline-dark">become a silver member</button>
                            </button>
                        </div>
                      </div>
                      </div>
                      <div class="col">
                  <div class="card h-100">
                    <img src="goldm.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Yearly</h5>
                      <p class="card-text">LKR 40,000</p>
                      <button type="submit" name="gold" class="btn  d-md-inline-block btn-outline-dark">become a gold member</button>
                            </button>
                        </div>
                      </div>
                      </div>
                </div>
                </form>    
          <footer class="my-5 pt-5 text-muted text-center text-small">
            <p class="mb-1">The One Gym</p>
        </footer>
    </body>
</html>
