<?php

include 'config.php';

session_start();

if(isset($_SESSION['username'])){
   $username = $_SESSION['username'];
}else{
   $username = '';
};

//include 'wish.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Products</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>  
  
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
<style>   
   procard {
   width: 400px;
  margin: auto;
}
</style>
</head>
<body>
   
   

               <?php 
               include "userheader.php";
               ?>
<section class="flex"> 
        <div class="center">
            <div class="py-3 container">
                <form method="post" action=""> 
                    
                    <input type="sp" id="query" name="sp" placeholder="Search name">
                    <input type="submit" value="Search" class="fs-6 btn d-md-inline-block btn-outline-dark" name="spro">
                <br>
                <input type="sf" id="sf" name="sf" placeholder="Search Flavour">
                    <input type="submit" value="Search" class="fs-6 btn d-md-inline-block btn-outline-dark" name="sfla">
                <br><br>
                <div class="container d-flex flex-column flex-md-row justify-content-between">
                  <div class="row">
                                
                                <select
                                class="custom-select tm-select-accounts"
                                id="sc"
                                name="sc"
                                >
                                >
                                <option selected>Search By Catergory</option>
                                <option value="protein">Protein</option>
                                <option value="pre workout">Pre Workout</option>
                                <option value="vitamins">Vitamins</option>
                                <option value="equipment">Equipment</option>
                                </select>
                                <input type="submit" value="Search" class="fs-6 btn d-md-inline-block btn-outline-dark" name="scat">
                  </div>            
                  <div class="row">
                                
                                <select
                                class="custom-select tm-select-accounts"
                                id="spric"
                                name="spric"
                                >
                                <option selected>Search by Price Max</option>
                                <option value="10000">Max LKR 10,000</option>
                                <option value="20000">Max LKR 20,000</option>
                                <option value="30000">Max LKR 30,000</option>
                                </select>
                                <input type="submit" value="Search" class="fs-6 btn d-md-inline-block btn-outline-dark" name="sprice">
                  </div>
                  <div class="row">                 
                                <select
                                class="custom-select tm-select-accounts"
                                id="smpric"
                                name="smpric"
                                >
                                <option selected>Search by Price Min</option>
                                <option value="5000" >Min LKR 5000</option>
                                <option value="10000">Min LKR 10,000</option>
                                <option value="20000">Min LKR 20,000</option>
                                <option value="30000">Min LKR 30,000</option>
                                </select>
                                <input type="submit" value="Search" class="fs-6 btn d-md-inline-block btn-outline-dark" name="smprice">
                  </div>
                  </div>
                </form>
            </div>
        </div>       
</section>
<section>
<div class="row row-cols-1 row-cols-md-3 g-4">
<?php
//search products by name
if (isset($_POST['spro'])) {
      $sql = "SELECT * FROM product where name='$_POST[sp]' ORDER BY price ASC;";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
   ?>
   <procard>
   <div class="col">

   <form action="" method="post" class="box">

      <img src="<?= $row['images']; ?>" alt="" width="250px">
      <div class="name"  href=""><?= $row['name']; ?></div>
      <div class="flex">
         <div class="price"><span>LKR </span><?= $row['price']; ?><span>/-</span></div>
         
      </div>
      <input type="submit" value=" " class="form-control btn btn-outline-dark " name="add">
      <input type="submit" value=" " class="form-control btn btn-outline-dark " name="buy">
   </form>
        </div>
        </procard>    
   <?php
   
      }
   }else{
      echo '<p class="empty">no products found!</p>';
   }}
//search products by catergory
   if (isset($_POST['scat'])) {
    $sql = "SELECT * FROM product where type='$_POST[sc]' ORDER BY price ASC;";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
 ?>
 <procard>
 <div class="col">

 <form action="" method="post" class="box">

    <img src="<?= $row['images']; ?>" alt="" width="250px">
    <div class="name"  href=""><?= $row['name']; ?></div>
    <div class="flex">
       <div class="price"><span>LKR </span><?= $row['price']; ?><span>/-</span></div>
       
    </div>
    <input type="submit" value=" " class="form-control btn btn-outline-dark " name="add">
    <input type="submit" value=" " class="form-control btn btn-outline-dark " name="buy">
 </form>
      </div>
      </procard>  
 <?php
 
    }
 }else{
    echo '<p class="empty">no products found!</p>';
 }}
 //search products by flavour
 if (isset($_POST['sfla'])) {
    $sql = "SELECT * FROM product where flavour='$_POST[sf]' ORDER BY price ASC;";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
 ?>
 <procard>
 <div class="col">

 <form action="" method="post" class="box">

    <img src="<?= $row['images']; ?>" alt="" width="250px">
    <div class="name"  href=""><?= $row['name']; ?></div>
    <div class="flex">
       <div class="price"><span>LKR </span><?= $row['price']; ?><span>/-</span></div>
       
    </div>
    <input type="submit" value=" " class="form-control btn btn-outline-dark " name="add">
    <input type="submit" value=" " class="form-control btn btn-outline-dark " name="buy">
 </form>
      </div>
      </procard>  
 <?php
 
    }
 }else{
    echo '<p class="empty">no products found!</p>';
 }}
//search products below by price
      if (isset($_POST['sprice'])) {
    $sql = "SELECT * FROM product where price <'$_POST[spric]' ORDER BY price ASC;";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
 ?>
 <procard>
 <div class="col">

 <form action="" method="post" class="box">

    <img src="<?= $row['images']; ?>" alt="" width="250px">
    <div class="name"  href=""><?= $row['name']; ?></div>
    <div class="flex">
       <div class="price"><span>LKR </span><?= $row['price']; ?><span>/-</span></div>
       
    </div>
    <input type="submit" value=" " class="form-control btn btn-outline-dark " name="add">
    <input type="submit" value=" " class="form-control btn btn-outline-dark " name="buy">
 </form>
      </div>
      </procard>    
 <?php
 
    }
}else{
    echo '<p class="empty">no products found!</p>';
 }}
 //search products above by price
 if (isset($_POST['smprice'])) {
    $sql = "SELECT * FROM product where price >'$_POST[smpric]' ORDER BY price ASC;";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
 ?>
 <procard>
 <div class="col">

 <form action="" method="post" class="box">

    <img src="<?= $row['images']; ?>" alt="" width="250px">
    <div class="name"  href=""><?= $row['name']; ?></div>
    <div class="flex">
       <div class="price"><span>LKR </span><?= $row['price']; ?><span>/-</span></div>
       
    </div>
    <input type="submit" value=" " class="form-control btn btn-outline-dark " name="add">
    <input type="submit" value=" " class="form-control btn btn-outline-dark " name="buy">
 </form>
      </div>
      </procard>   
 <?php
 
    }
}else{
    echo '<p class="empty">no products found!</p>';
 }}
   ?>
</section>           
<section class="products">

   <div class="container d-flex flex-column flex-md-row justify-content-between">
      <br><br><br>
                        <form action="" method="POST">
                        <div> 
                        <br>
                        <label for="pn">Product Name :</label><br>
                        <input type="text" id="pn" name="pn"><br><br>
                        </div>
                        <label for="qty">Quantity:</label><br>
                        <input type="number" name="qty" class="qty" min="1" max="99" onkeypress="if(this.value.length == 2) return false;" value="1"> 
                        <?
                        ?>
                        <button type="submit" name="addcart" class="btn btn-success  btn-lg btn-block text-uppercase">add to cart</button><br><br>
                        </form> 
                        </div>
                        
                           </div>
                           </section>

                        <?php
                        $prodn = $_POST['pn'];
                        $qt = $_POST['qty'];
                        if (isset($_POST['addcart'])) {
                           echo $prodn,$qt;
                           $sql = "INSERT INTO `cart` VALUES ('','$username', '$prodn','$qt')";
                            } else {
                                echo "Nothing was posted";
                            }
                            if (mysqli_query($conn, $sql)) {
                                echo "Product carted successfully";
                            } else {
                                echo "Error updating record: " . mysqli_error($conn);
                            }
                        ?>
                           
</body>
  



