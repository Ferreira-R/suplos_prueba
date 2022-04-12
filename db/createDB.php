<?php include 'userLogin.php' ?>
<?php

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

// Create database
$createDB = "CREATE DATABASE intelcost_bienes";
if (mysqli_query($conn, $createDB)) {
	echo "<script>console.log('Database created successfully');</script>";
} else {
	echo "<script>console.log('Error creating database');</script>: ";
}

mysqli_close($conn);
