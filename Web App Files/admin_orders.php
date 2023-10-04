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
                <h1 class="display-4 fw-normal">Orders</h1>
                <p class="lead fw-normal">Of One Gym.</p>
                <?php 
                    include "adminheader.php";
                ?>
                </div> 
                <div class="container">
                    <div class="row justify-content-center">
                    <table class="table">
                        <thead>
                            <tr>
                                <td>Order ID</td>
                                <td>Username</td>
                                <td>Product Name</td>
                                <td>Quantity</td>
                                <td>Delivery Address</td>
                                <td>City</td>
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
                        $sql = "SELECT * FROM orders";
                        $result = $conn->query($sql);
                        while ($row= $result->fetch_assoc()):?>
                        <tr>
                            <td><?php echo $row['orderid']; ?> </td>
                            <td><?php echo $row['username']; ?> </td>
                            <td><?php echo $row['productn']; ?> </td>
                            <td><?php echo $row['quantity']; ?> </td>
                            <td><?php echo $row['address']; ?> </td>
                            <td><?php echo $row['city']; ?> </td>
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
                <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
                        <form action="" method="POST">
                        <div> 
                        <label for="ord">Order Number :</label><br>
                        <input type="number" id="ord" name="ord"><br><br>
                        </div> 
                        <div class="form-group mb-3">
                                <label
                                for="prog"
                                >Progress Stage</label
                                >
                                <select
                                class="custom-select tm-select-accounts"
                                id="prog"
                                name="prog"
                                >
                                <option selected>Select Stage</option>
                                <option value="processing">Processing</option>
                                <option value="shipped">Shipped</option>
                                <option value="completed">Completed</option>
                                </select>
                            </div> 
                        
                        <button type="submit" name="lol" class="btn btn-success  btn-lg btn-block text-uppercase">Confirm Progress</button>
                        </form> 
                        </div>
                        <?php
                        $prodn = $_POST['ord'];
                        
                        if (isset($_POST['lol'])) {
                           
                            $sql = "UPDATE orders SET progress = '$_POST[prog]'  WHERE orderid = '$_POST[ord]'";
                            } else {
                                echo "Nothing was posted";
                            }
                            if (mysqli_query($conn, $sql)) {
                                echo "Progress updated successfully";
                            } else {
                                echo "Error updating record: " . mysqli_error($conn);
                            }
                        ?>


            <footer class="my-5 pt-5 text-muted text-center text-small">
                <p class="mb-1">The One Gym</p>
            </footer>
        </body>
    </html>
    