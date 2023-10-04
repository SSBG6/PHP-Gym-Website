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
                <h1 class="display-4 fw-normal">Members</h1>
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
                                <td>Member username</td>
                                <td>Membership plan</td>
   
                        </thead>
                        
                        <section>
                        <?php
                        include("config.php");
                        if($conn === false){
                        die("ERROR: Could not connect. "
                        . mysqli_connect_error());}                      
                        $sql = "SELECT * FROM membership";
                        $result = $conn->query($sql);
                        while ($row= $result->fetch_assoc()):?>
                        <tr>
                            <td><?php echo $row['username']; ?> </td>
                            <td><?php echo $row['plan']; ?> </td>

                            <td>
                        </td>
                        </tr>
                        <?php endwhile;?>
                        </table>
                    </div>
                </div>

                        <div class="container">
                <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
                <div class="row justify-content-center">
                    <table class="table">
                        <thead>
                            <tr>
                                
                                <td>Membership plan</td>
                                <td>Membership price</td>
   
                        </thead>
                        </section>
                        
                        <?php
                                            
                        $sql = "SELECT * FROM membershipprice";
                        $result = $conn->query($sql);
                        while ($row= $result->fetch_assoc()):?>
                        <tr>
                            <td><?php echo $row['mship']; ?> </td>
                            <td><?php echo "LKR ".$row['price']; ?> </td>

                            <td>
                        </td>
                        </tr>
                        <?php endwhile;?>
                        </table>
                        </div>
                        </div>
                        </div>
                        <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
                        <form action="" method="POST">
                        <div class="form-group mb-3">
                                <label
                                for="mem"
                                >Membership Plan</label
                                >
                                <select
                                class="custom-select tm-select-accounts"
                                id="mem"
                                name="mem"
                                >
                                <option selected>Select Plan to Edit</option>
                                <option value="bronze">bronze</option>
                                <option value="silver">silver</option>
                                <option value="gold">gold</option>
                                </select>
                            </div> 
                        <div> 
                        <label for="price1">Plan Price in LKR:</label><br>
                        <input type="number" id="price1" name="price1"><br><br>
                        </div> 
                        <button type="submit" name="edit" class="btn btn-success  btn-lg btn-block text-uppercase">Edit Membership</button>
                        </form> 
                        </div>
                        <?php
                            if (isset($_POST['edit'])) {
                                $sql = "UPDATE membershipprice SET price = '$_POST[price1]' WHERE mship = '$_POST[mem]'";
                            } else {
                                echo "Nothing was posted";
                            }
                            
                            if (mysqli_query($conn, $sql)) {
                                echo "Record updated successfully";
                            } else {
                                echo "Error updating record: " . mysqli_error($conn);
                        
                        }
                        ?>
                        
            <footer class="my-5 pt-5 text-muted text-center text-small">
                <p class="mb-1">The One Gym</p>
            </footer>
        </body>
    </html>
    