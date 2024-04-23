<!DOCTYPE html>
<html dir="ltr" lang="en-US">
  <head>
    <!-- Document Meta-->
    <meta charset="utf-8"/>
    
<link href="https://cdn.jsdelivr.net/npm/daisyui@4.10.2/dist/full.min.css" rel="stylesheet" type="text/css" />
<script src="https://cdn.tailwindcss.com"></script>

    <title>Medicare Management System</title>
  </head>
<body>
<?php  include 'header.php' ?>
<section class="w-[1200px] mx-auto">
      <h1 class="text-5xl font-bold py-12 text-center">MEDICINES</h1>

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

// Retrieve medicine records from the database
$sql = "SELECT * FROM medicines";
$result = $conn->query($sql);

// Check if there are any medicine records
if ($result->num_rows > 0) {
    echo "<div class='grid grid-cols-1 md:grid-cols-3 gap-4'>";
    while ($row = $result->fetch_assoc()) {
        echo "<div class='card w-96 glass p-6'>";
        echo "<figure><img src='" . $row["image"] . "' alt='Medicine Image' class='w-full mb-2'></figure>";
        echo "<div class='card-body'>";
        echo "<h3 class='card-title text-white text- mb-2'>" . $row["medicine_name"] . "<sub>" . $row["medicine_power"] . "</sub></h3>";
        echo "<p class='text-slate-300 mb-2'><strong>Quantity:</strong> " . $row["quantity"] . "</p>";
        echo "<p class='text-slate-300 mb-2'><strong>Price:</strong> $" . $row["price"] . "</p>";
        echo "<div class='card-actions justify-center'><button class='btn btn-active btn-primary text-white'>Buy now!</button></div>";
        echo "</div></div>";
    }
    echo "</div>";
} else {
    echo "No medicines found";
}

$conn->close();
?>
</section>
<?php  include 'footer.php' ?>
</body>
</html>
