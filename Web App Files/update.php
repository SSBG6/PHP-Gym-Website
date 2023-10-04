<?php
include "config.php";
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    $username = $_SESSION['username'];
    echo $username;
}

if (isset($_POST['update'])) {
    $sql = "UPDATE users SET firstname = '$_POST[first_name]', lastname = '$_POST[last_name]', password = '$_POST[password]',email = '$_POST[email]', 
    address = '$_POST[address]', city = '$_POST[city]', contact = '$_POST[contact]' WHERE username = '$_POST[username]'";
} else {
    echo "Nothing was posted";
}

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
