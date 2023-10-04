<?php
include "config.php";
$username = $_SESSION['username'];
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    $username = $_SESSION['username'];
    echo $username;
}
$query = "select * from membership where username = '$username'";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result)==1){
    echo "User already has a membership.";
} else{
    //bronze
if (isset($_POST['bronze'])) {
    $sql = "INSERT INTO membership VALUES ('$username', 'bronze');";
        
        if(mysqli_query($conn, $sql)){
            echo "Product Added successfully.";

            //echo nl2br("\n$name\n $type\n ". "$flavour\n $weight\n $price\n $brand\n $stock\n $description\n $images");
        } else{
            //echo "ERROR: Hush! Sorry $sql. ". mysqli_error($conn);
        }
        
        // Close connection
        mysqli_close($conn);
}
//silver
if (isset($_POST['silver'])) {
    $sql = "INSERT INTO membership VALUES ('$username', 'silver');";
        
        if(mysqli_query($conn, $sql)){
            echo "Product Added successfully.";

            //echo nl2br("\n$name\n $type\n ". "$flavour\n $weight\n $price\n $brand\n $stock\n $description\n $images");
        } else{
            //echo "ERROR: Hush! Sorry $sql. ". mysqli_error($conn);
        }
        
        // Close connection
        mysqli_close($conn);
}
//gold
if (isset($_POST['gold'])) {
    $sql = "INSERT INTO membership VALUES ('$username', 'gold');";
        
        if(mysqli_query($conn, $sql)){
            echo "Product Added successfully.";

            //echo nl2br("\n$name\n $type\n ". "$flavour\n $weight\n $price\n $brand\n $stock\n $description\n $images");
        } else{
            //echo "ERROR: Hush! Sorry $sql. ". mysqli_error($conn);
        }
        
        // Close connection
        mysqli_close($conn);
}}

?>
