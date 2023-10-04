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
                <h1 class="display-4 fw-normal">Edit products</h1>
                <p class="lead fw-normal">The One For All Your Fitness Needs.</p>
                <?php 
                    include "adminheader.php";
                ?>
                </div> 
                <div class="container">
                <div class="row justify-content-center">
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
                                <td>images</td>
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
                            <td><?php echo $row['images']; ?> </td>
                            <td>

                        </td>
                        </tr>
                        <?php endwhile;?>
                        </table>
                        </div>
                        </div>
                <div class="row">
                    <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
                    <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
                        <div class="row">
                        <div class="col-12">
                            <h2 class="tm-block-title d-inline-block">Edit Product</h2>
                        </div>
                        </div>
                        <!-- product name -->
                        <div class="row tm-edit-product-row">
                        <div class="col-xl-6 col-lg-6 col-md-12">
                            <form action="" method="post" class="tm-edit-product-form">
                            <div>
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
                            <div>
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
                            <div>
                                <label
                                for="category"
                                >Category</label
                                >
                                <select
                                class="custom-select tm-select-accounts"
                                id="category"
                                name="type"
                                >
                                <option selected>Supplement</option>
                                <option value="protein">Protein</option>
                                <option value="pre workout">Pre Workout</option>
                                <option value="vitamins">Vitamins</option>
                                <option value="equipment">Equipment</option>
                                </select>
                            </div>
                            <!-- price -->
                            <div class="row">
                                <div class="mb-3 col-xs-12 col-sm-6">
                                    <label
                                        for="price"
                                        >Price
                                    </label>
                                    <input
                                        id="price"
                                        name="price"
                                        type="text"
                                        class="form-control validate"
                                       
                                    />
                                    <!-- in stock -->
                                    <div class="mb-3 col-xs-12 col-sm-6">
                                    <label
                                        for="stock"
                                        >Units In Stock
                                    </label>
                                    <input
                                        id="stock"
                                        name="stock"
                                        type="text"
                                        class="form-control validate"
                                        
                                    />
                                        </div>
                                        <!-- brand  -->
                                <div>
                                <label
                                for="brand"
                                >Brand
                                </label>
                                <input
                                id="brand"
                                name="brand"
                                type="text"
                                class="form-control validate"
                                
                                />
                                </div>
                                    <div>
                                    <label
                                    for="weight"
                                    >Weight (lbs or Kg)
                                    </label>
                                    <input
                                    id="weight"
                                    name="weight"
                                    type="text"
                                    class="form-control validate"
                                    
                                    />
                                <div>
                                <label
                                for="flavour"
                                >Flavour
                                </label>
                                <input
                                id="flavour"
                                name="flavour"
                                type="text"
                                class="form-control validate"
                                
                                />
                                </div>
                                <div>
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
                            
                            <button type="submit" name="edit" class="btn btn-success  btn-lg btn-block text-uppercase">Edit Product</button>
                            <button type="submit" name="delete" class="btn btn-danger  btn-lg btn-block text-uppercase">Delete Product</button>
                        </div>
                        </form>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
                <?php
                include("admin_editprofunc.php");
               
    ?>
            <footer class="my-5 pt-5 text-muted text-center text-small">
                <p class="mb-1">The One Gym</p>
            </footer>
        </body>
    </html>
    