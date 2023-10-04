<?php

include 'config.php';

session_start();

if(isset($_SESSION['username'])){
   $username = $_SESSION['username'];
}else{
   $username = '';
};



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

</head>
<style>

procard {
   opacity: 80%
   width: 500px;
  margin: auto;
}
procard2{
   width: 500px;
  margin: auto;
}

</style>
<body>
   

               <?php 
               include "userheader.php";
               ?> 
               
              
                  
<section class="products">

   <div class="row row-cols-1 row-cols-md-3 g-4">
   
   <?php
      $sql = "SELECT * FROM product where price>1";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
         
      ?>
         <input type="hidden" name="name1" value="<?= $row['name']; ?>">
   <div class="col">
     
   <form action="" method="post" class="box">
      <procard>
      <?
      ?>
      <img src="<?= $row['images']; ?>" alt="" width="250px">
      <h4 class="proname" name="pname" ><?= $row['name']; ?></h4>
      <div class="flex">
         <h4 class="center price"><span>LKR </span><?= $row['price']; ?><span>/-</span></h4>
         <div class="stock"><span></span><?= $row['stock']; ?><span> units in stock</span></div>
      </div>
   </form>
   </procard>
        </div>
       
   <?php
   
      }
   }else{
      echo '<p class="empty">no products found!</p>';
   }
   
   ?>
   <div class="container d-flex flex-column flex-md-row justify-content-between">
                        <form action="" method="POST">
                        <div> 
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
<?
?>
   </div>
</section>

                        <?php
                        $prodn = $_POST['pn'];
                        $qt = $_POST['qty'];
                        if (isset($_POST['addcart'])) {
                           echo $prodn,$qt;
                           if (!empty($prodn)){
                           $sql = "INSERT INTO `cart` VALUES ('','$username', '$prodn','$qt')";
                            } else {
                                //echo "Nothing was posted";
                            }
                            if (mysqli_query($conn, $sql)) {
                                echo "Product carted successfully";
                            } else {
                                //echo "Error updating record: " . mysqli_error($conn);
                            }}
                        ?>
                        </body>
</html lang="en">


