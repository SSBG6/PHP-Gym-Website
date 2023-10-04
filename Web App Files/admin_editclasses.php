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
                <h1 class="display-4 fw-normal">Edit Classes</h1>
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
                                <td>Price</td>
                                <td>Slots</td>
                                <td>Description</td>
                                <td>images</td>
                        </thead>
                        
                        
                        <?php
                        include("config.php");
                        if($conn === false){
                        die("ERROR: Could not connect. "
                        . mysqli_connect_error());}                      
                        $sql = "SELECT * FROM classes";
                        $result = $conn->query($sql);
                        while ($row= $result->fetch_assoc()):?>
                        <tr>
                            <td><?php echo $row['name']; ?> </td>
                            <td><?php echo $row['type']; ?> </td>
                            <td><?php echo $row['price']; ?> </td>
                            <td><?php echo $row['slots']; ?> </td>
                            <td><?php echo $row['Description']; ?> </td>
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
                            <h2 class="tm-block-title d-inline-block">Edit Classes</h2>
                        </div>
                        </div>
                        <!-- product name -->
                        <div class="row tm-edit-product-row">
                        <div class="col-xl-6 col-lg-6 col-md-12">
                            <form action="" method="post" class="tm-edit-product-form">
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
                                <input
                                id="description"
                                name="description"
                                type="text"
                                class="form-control validate"
                                
                                />
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
                            
                            
                            <button type="submit" name="edit" class="btn btn-success  btn-lg btn-block text-uppercase">Add Class Now</button>
                            <button type="submit" name="delete" class="btn btn-danger  btn-lg btn-block text-uppercase">Delete Class</button>
                            </form>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
                <?php
                include("admin_editclassesfunc.php");
               
    ?>
            <footer class="my-5 pt-5 text-muted text-center text-small">
                <p class="mb-1">The One Gym</p>
            </footer>
        </body>
    </html>
    