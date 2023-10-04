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
               include "adminheader.php";
               ?>
<section class="flex"> 
        <div class="center">
            <div class="py-3 container">
                <div class="container">
                    <div class="row justify-content-center">
                    <table class="table">
                        <thead>
                            <tr>
                                <td>Order ID</td>
                                
                                <td>Product Name</td>
                                <td>Username</td>
                                <td>Rating</td>
                                <td>Comment</td>
                                
   
                        </thead>
                        
                        <section>
                        <?php
                        include("config.php");
                                               
                        if($conn === false){
                        die("ERROR: Could not connect. "
                        . mysqli_connect_error());}                      
                        $sql = "SELECT * FROM feedback order by 'prodname'";
                        $result = $conn->query($sql);
                        while ($row= $result->fetch_assoc()):?>
                        <tr>
                            <td><?php echo $row['orderid']; ?> </td>
                            <td><?php echo $row['prodname']; ?> </td>
                            <td><?php echo $row['username']; ?> </td>
                            <td><?php echo $row['rating']; ?> </td>
                            <td><?php echo $row['comment']; ?> </td>
                            
                            

                            <td>
                        </td>
                        </tr>
                        <?php endwhile;?>
                        </table>
                    </div>
                </div>
</section>    
</body>
  



