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
                <h1 class="display-4 fw-normal">Add products</h1>
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
                            <h2 class="tm-block-title d-inline-block">Add Product</h2>
                        </div>
                        </div>
                        <!-- product name -->
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
                            <!-- description -->
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
                            <!-- drop down for catergories -->
                            <div class="form-group mb-3">
                                <label
                                for="category"
                                >Category</label
                                >
                                <select
                                class="custom-select tm-select-accounts"
                                id="category"
                                name="type"
                                >
                                <option selected>Select category</option>
                                <option value="protein">Protein</option>
                                <option value="pre workout">Pre Workout</option>
                                <option value="vitamins">Vitamins</option>
                                <option value="equipment">Equipment</option>
                                </select>
                            </div>
                            <!-- price -->
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
                                    <!-- in stock -->
                                    <div class="form-group mb-3 col-xs-12 col-sm-6">
                                    <label
                                        for="stock"
                                        >Units In Stock
                                    </label>
                                    <input
                                        id="stock"
                                        name="stock"
                                        type="text"
                                        class="form-control validate"
                                        required
                                    />
                                        </div>
                                        <!-- brand  -->
                                <div class="form-group mb-3">
                                <label
                                for="brand"
                                >Brand
                                </label>
                                <input
                                id="brand"
                                name="brand"
                                type="text"
                                class="form-control validate"
                                required
                                />
                                </div>
                                    <div class="form-group mb-3">
                                    <label
                                    for="weight"
                                    >Weight (lbs or Kg)
                                    </label>
                                    <input
                                    id="weight"
                                    name="weight"
                                    type="text"
                                    class="form-control validate"
                                    required
                                    />
                                <div class="form-group mb-3">
                                <label
                                for="flavour"
                                >Flavour
                                </label>
                                <input
                                id="flavour"
                                name="flavour"
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
        $flavour = $_REQUEST['flavour']; 
        $weight =  $_REQUEST['weight'];
        $price =  $_REQUEST['price'];
        $brand =  $_REQUEST['brand'];
        $stock =  $_REQUEST['stock'];
        $description =  $_REQUEST['description'];
        $images = $_REQUEST['image_link'];

        // Performing insert query execution
        // here our table name is product
        $sql = "INSERT INTO product VALUES ('$name', '$type','$flavour', '$weight', '$price', '$brand', '$stock', '$description','$images');";
        
        if(mysqli_query($conn, $sql)){
            echo "Product Added successfully.";

            //echo nl2br("\n$name\n $type\n ". "$flavour\n $weight\n $price\n $brand\n $stock\n $description\n $images");
        } else{
            //echo "ERROR: Hush! Sorry $sql. ". mysqli_error($conn);
        }
        
        // Close connection
        mysqli_close($conn);
    ?>
            <footer class="my-5 pt-5 text-muted text-center text-small">
                <p class="mb-1">The One Gym</p>
            </footer>
        </body>
    </html>
    