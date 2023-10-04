<?php
include "config.php";
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());

}

if (isset($_POST['edit'])) {
    $sql = "UPDATE product SET type = '$_POST[type]', flavour = '$_POST[flavour]', weight = '$_POST[weight]', price = '$_POST[price]', 
    brand = '$_POST[brand]', stock = '$_POST[stock]', description = '$_POST[description]', images = '$_POST[image_link]' WHERE name = '$_POST[name]'";
} else {
    //echo "Nothing was posted";
}

if (mysqli_query($conn, $sql)) {
    echo "Product updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
if (isset($_POST['delete'])) {
    $sql = "DELETE FROM product WHERE name = '$_POST[name]'";
} else {
    //echo "Nothing was posted";
}
//kaboom the product will be gone
if (mysqli_query($conn, $sql)) {
    echo "Product deleted successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
