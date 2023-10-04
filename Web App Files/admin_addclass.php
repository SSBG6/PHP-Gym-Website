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
                <div class="position-relative text-center bg-light">
                <h1 class="display-4 fw-normal">Add Classes</h1>
                <p class="lead fw-normal">The One For All Your Fitness Needs.</p>
                <?php 
                    include "adminheader.php";
                ?>
                </div> 
                
                <div class="row">
                    <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
                    <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
                        <div class="row">
                        <div class="col-12">
                            <h2 class="tm-block-title d-inline-block">Add Classes</h2>
                        </div>
                        </div>
                        <div class="row tm-edit-product-row">
                        <div class="col-xl-6 col-lg-6 col-md-12">
                            <form action="" class="tm-edit-product-form">
                            <div class="form-group mb-3">
                                <label
                                for="name"
                                >Product Name
                                </label>
                                <input
                                id="name"
                                name="name"
                                type="text"
                                class="form-control validate"
                                required
                                />
                            </div>
                            <div class="form-group mb-3">
                                <label
                                for="description"
                                >Description</label
                                >
                                <textarea
                                class="form-control validate"
                                rows="3"
                                name="description"
                               
                                ></textarea>
                            </div>
                            <div class="form-group mb-3">
                                <label
                                for="type"
                                >Category</label
                                >
                                <select
                                class="custom-select tm-select-accounts"
                                id="type"
                                name="type"
                                >
                                <option selected>Select category</option>
                                <option value="yoga">Yoga</option>
                                <option value="martial arts">Martial Arts</option>
                                <option value="dance">Dance</option>
                                <option value="fitness">other</option>
                                
                                </select>
                            </div>
                            <div class="row">
                                <div class="form-group mb-3 col-xs-12 col-sm-6">
                                    <label
                                        for="price"
                                        >Price
                                    </label>
                                    <input
                                        id="price"
                                        name="price"
                                        type="text"
                                        class="form-control validate"
                                        required
                                    />
                                    </div>
                                    <div class="form-group mb-3 col-xs-12 col-sm-6">
                                    <label
                                        for="slots"
                                        >Slots available
                                    </label>
                                    <input
                                        id="slots"
                                        name="slots"
                                        type="text"
                                        class="form-control validate"
                                        required
                                    />
                                        </div>
        
                                <div class="form-group mb-3">
                                <label
                                for="image_link"
                                >Image link
                                </label>
                                <input
                                id="image_link"
                                name="image_link"
                                type="text"
                                class="form-control validate"
                                
                                />
                                </div>

                            </div>
                            
                            <button type="submit" class="btn btn-primary  btn-lg btn-block text-uppercase">Add Product Now</button>
                            <br />
                            <br />
                            <br />
                            <br />
                            <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                        </div>
                        </form>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
                <?php
                include("config.php");
                if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
        
        // Taking all 5 values from the form data(input)
        $name = $_REQUEST['name'];
        $type = $_REQUEST['type'];
        $price =  $_REQUEST['price'];
        $slots =  $_REQUEST['slots'];
        $description =  $_REQUEST['description'];
        $images = $_REQUEST['image_link'];

        // Performing insert query execution
        // here our table name is product
        $sql = "INSERT INTO classes VALUES ('$name', '$type','$price', '$slots', '$description', '$images');";
        
        if(mysqli_query($conn, $sql)){
            echo "Class Created Successfully";

            //echo nl2br("\n$name\n $type\n $price\n $slots\n $description\n $images");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
        
        // Close connection
        mysqli_close($conn);
    ?>
            <footer class="my-5 pt-5 text-muted text-center text-small">
                <p class="mb-1">The One Gym</p>
            </footer>
        </body>
    </html>
    