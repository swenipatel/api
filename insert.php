<?php
include 'connect.php';

$name  = $_POST["pname"];
$price = $_POST["pprice"];
$des   = $_POST["pdes"];

if ($name == "" || $price == "" || $des == "") {
    echo "All fields are required.";
    exit;
}

$sql = "INSERT INTO s_products (pname, pprice, pdes) VALUES ('$name','$price','$des')";
if(mysqli_query($con, $sql)){
    echo "Record inserted successfully";
} else {
    echo "Error: " . mysqli_error($con);
}

mysqli_close($con);
?>