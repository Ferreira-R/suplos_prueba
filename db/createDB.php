<?php include 'connection.php'; ?>

<?php

// Create database
$createDB = "CREATE DATABASE Intelcost_bienes";
if (mysqli_query($conn, $createDB)) {
	echo "<script>console.log('Database created successfully');</script>";
} else {
	echo "<script>console.log('Error creating database: $conn->error');</script>: ";
}

$conn->close();

?>