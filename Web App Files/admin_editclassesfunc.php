<?php
include "config.php";
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());

}

if (isset($_POST['edit'])) {
    $sql = "UPDATE classes SET type = '$_POST[type]', price = '$_POST[price]', 
    slots = '$_POST[slots]', Description = '$_POST[description]', images = '$_POST[image_link]' WHERE name = '$_POST[name]'";
    
} else {
    //echo "Nothing was posted";
}

if (mysqli_query($conn, $sql)) {
    echo "Product updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
if (isset($_POST['delete'])) {
    $sql = "DELETE FROM classes WHERE name = '$_POST[name]'";
} else {
    echo "Nothing was posted";
}
//kaboom the product will be gone
if (mysqli_query($conn, $sql)) {
    echo "Product deleted successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>
