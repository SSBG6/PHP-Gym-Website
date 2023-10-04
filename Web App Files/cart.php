<?php

include 'config.php';

session_start();

if(isset($_SESSION['username'])){
   $username = $_SESSION['username'];
}else{
   $username = '';
};



?>
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
                
                <div class="position-relative text-center bg-light">
                <h1 class="display-4 fw-normal">Cart</h1>
                <p class="lead fw-normal">One Gym</p>
                <?php 
                    include "userheader.php";
                ?>

                <br><br>
                <section>
                <h4 class="text-center">All Products</h4>
                <div class="container d-flex flex-column flex-md-row justify-content-between">
                <table class="table">
                        <thead>
                            <tr>
                                <td>Name</td>
                                <td>Type</td>
                                <td>Flavour</td>
                                <td>Weight</td>
                                <td>Price</td>
                                <td>Brand</td>
                                <td>Stock</td>
                                <td>Description</td>
                                
                        </thead>
                        
                        
                        <?php
                        include("config.php");
                        
                        if($conn === false){
                        die("ERROR: Could not connect. "
                        . mysqli_connect_error());}                      
                        $sql = "SELECT * FROM product";
                        $result = $conn->query($sql);
                        while ($row= $result->fetch_assoc()):?>
                        <tr>
                            <td><?php echo $row['name']; ?> </td>
                            <td><?php echo $row['type']; ?> </td>
                            <td><?php echo $row['flavour']; ?> </td>
                            <td><?php echo $row['weight']; ?> </td>
                            <td><?php echo $row['price']; ?> </td>
                            <td><?php echo $row['brand']; ?> </td>
                            <td><?php echo $row['stock']; ?> </td>
                            <td><?php echo $row['description']; ?> </td>
                            <td>

                        </td>
                        </tr>
                        <?php endwhile;?>
                        </table>
                        </div>
                        </div>
                </div> 
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
                        </div>

                        <?php
                        $prodn = $_POST['pn'];
                        $qt = $_POST['qty'];
                        if (isset($_POST['addcart'])) {
                           echo $prodn,$qt;
                           $sql = "INSERT INTO `cart` VALUES ('','$username', '$prodn','$qt')";
                            } else {
                                //echo "Nothing was posted";
                            }
                            if (mysqli_query($conn, $sql)) {
                                //echo "Product carted successfully";
                            } else {
                                //echo "Error updating record: " . mysqli_error($conn);
                            }
                        ?>
                <h4 class="text-center">Cart</h4>    
                <div class="container d-flex flex-column flex-md-row justify-content-between">
                <table class="table">
                        <thead>
                            <tr>
                                <td>Order ID</td>
                                <td>Username</td>
                                <td>Prodname</td>
                                <td>Quantity</td>
                                
                        </thead>
                        
                        
                        <?php
                        
                        if($conn === false){
                        die("ERROR: Could not connect. "
                        . mysqli_connect_error());}                      
                        $sql = "SELECT * FROM cart where username= '$username'";
                        $result = $conn->query($sql);
                        while ($row= $result->fetch_assoc()):?>
                        <tr>
                            <td><?php echo $row['orderid']; ?> </td>
                            <td><?php echo $row['username']; ?> </td>
                            <td><?php echo $row['proname']; ?> </td>
                            <td><?php echo $row['quantit']; ?> </td>
                            <td>

                        </td>
                        </tr>
                        <?php endwhile;?>
                        </table>
                        </div>
                        </div>
                        <div class="container d-flex flex-column flex-md-row justify-content-between">
                        <form action="" method="POST">
                        <div> 
                        <label for="on">Order ID:</label><br>
                        <input type="text" id="on" name="on"><br><br>
                        </div> 
                        <button type="submit" name="addorder" class="btn btn-success  btn-lg btn-block text-uppercase">Confirm Order</button>
                        </form> 
                        </div>
                        <?php
                        $ordid = $_POST['on'];
                        if (isset($_POST['addorder'])) {

                            $sqliQuery= "SELECT address,contact,city FROM users where username ='$username'";
                            $sqli= "SELECT * from cart where orderid ='$ordid'";
                            $sql2 = "DELETE * FROM cart WHERE orderid = '$ordid'";  
                            if ($result = $conn->query($sqli)) {    
                                while ($row = $result->fetch_object()) {
                                    $prodn = $row->proname;
                                    $qt = $row->quantit;
                                    
                                }}
                            if ($result = $conn->query($sqliQuery)) {    
                                while ($row = $result->fetch_object()) {
                                    $add = $row->address;
                                    $cont = $row->contact;
                                    $cit = $row->city;
                                }}
                                
                           $sql = "INSERT INTO `orders` VALUES ('$ordid','$username', '$prodn','$qt','$add','$cit','Cash on Delivery','$cont','processing')";
                            } else {
                                //echo "Nothing was posted";
                            }
                            if (mysqli_query($conn, $sql)) {
                                //echo "Product carted successfully";
                            } else {
                                //echo "Error updating record: " . mysqli_error($conn);
                            }
                        ?>

                
                <div class="container">
                    <div class="row justify-content-center">
                    <h4 class="text-center">Your Orders</h4>
                    <table class="table">
                        <thead>
                            <tr>
                                <td>Order ID</td>
                                <td>Username</td>
                                <td>Prodname</td>
                                <td>Quantity</td>
                                <td>Delivery Address</td>
                                <td>Payment Method</td>
                                <td>Contact Number</td>
                                <td>Order Progress</td>
   
                        </thead>
                        
                        <section>
                        <?php
                        include("config.php");
                        if($conn === false){
                        die("ERROR: Could not connect. "
                        . mysqli_connect_error());}                      
                        $sql = "SELECT * FROM orders where username='$username'";
                        $result = $conn->query($sql);
                        while ($row= $result->fetch_assoc()):?>
                        <tr>
                            <td><?php echo $row['orderid']; ?> </td>
                            <td><?php echo $row['username']; ?> </td>
                            <td><?php echo $row['productn']; ?> </td>
                            <td><?php echo $row['quantity']; ?> </td>
                            <td><?php echo $row['address']; ?> </td>
                            <td><?php echo $row['pmethod']; ?> </td>
                            <td><?php echo $row['contact']; ?> </td>
                            <td><?php echo $row['progress']; ?> </td>
                            

                            <td>
                        </td>
                        </tr>
                        <?php endwhile;?>
                        </table>
                    </div>
                </div>
                <div class="container d-flex flex-column flex-md-row justify-content-between">
                        <form action="" method="POST">
                            
                        <div>
                        <label for="on">Order ID:</label><br>
                        <input type="text" id="on" name="on"><br><br>
                        </div>
                        <div class="form-group mb-3">
                                <label
                                for="rate"
                                >Rating</label
                                >
                                <select
                                class="custom-select tm-select-accounts"
                                id="rate"
                                name="rate"
                                >
                                <option selected>from 1 being bad to 5 being great</option>
                                <option value="5">5</option>
                                <option value="4">4</option>
                                <option value="3">3</option>
                                <option value="5">2</option>
                                <option value="1">1</option>
                                
                                </select>

                            </div>   
                        <div class="form-group mb-3">
                                <label
                                for="comment"
                                >Comments</label
                                >
                                <textarea
                                class="form-control validate"
                                rows="5"
                                name="comment"
                               
                                ></textarea>
                            </div> <br>
                        <button type="submit" name="delte" class="fs-6 btn d-md-inline-block btn-outline-dark">Confirm review</button>
                        </form> 
                        </div>
                        <?php
                        $rate =$_POST['rate'];
                        $desc = $_POST['comment']; 
                        $ordid = $_POST['on'];
                        if (isset($_POST['delte'])) {

                            $sql= "SELECT productn,progress FROM orders where orderid ='$ordid'";
                            
                            if ($result = $conn->query($sql)) {    
                                while ($row = $result->fetch_object()) {
                                    $progs = $row->progress;
                                    $pname = $row->productn;
                                }}
                            if ($progs=='completed'){
                            $sql = "INSERT INTO `feedback` VALUES ('$ordid','$pname', '$username','$rate','$desc')";}
                            else{
                                echo "You cannot review Product that havent been completed";
                            }
                            } else {
                               // echo "Nothing was posted";
                            }
                            if (mysqli_query($conn, $sql)) {
                               echo "Feedback given successfully";
                            } else {
                               // echo "Error updating record: " . mysqli_error($conn);
                            }
                        ?>
                
                       
               
                
             </section>                  
            <footer class="my-5 pt-5 text-muted text-center text-small">
                <p class="mb-1">The One Gym</p>

            </footer>
        </body>
    </html>
    