<?php
session_start();

// Establish database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "medicare_md";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$medicine_name = $_POST['medicine_name'];
$medicine_power = $_POST['medicine_power'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];

// File upload handling
$image = $_FILES['image'];
$image_name = $image['name'];
$image_tmp_name = $image['tmp_name'];
$image_error = $image['error'];

if ($image_error === 0) {
    $image_destination = 'uploads/' . $image_name;
    if (move_uploaded_file($image_tmp_name, $image_destination)) {
        header("Location: medicines.php");
    } else {
        die("Error moving uploaded image");
    }
} else {
    die("Error uploading image");
}

// Insert medicine data into the database
$sql = "INSERT INTO medicines (medicine_name, medicine_power, quantity, image, price) 
        VALUES ('$medicine_name', '$medicine_power', '$quantity', '$image_destination', '$price')";

if ($conn->query($sql) === TRUE) {
    echo "New medicine added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
