<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "intelcost_bienes";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
$tdatosGenerales = "CREATE TABLE datos_generales (
	id INT(3) PRIMARY KEY,
	direccion VARCHAR(100),
	ciudad VARCHAR(50),
	telefono VARCHAR(20),
	cpostal INT(10),
	tipo VARCHAR(50),
	precio VARCHAR(20)
	)";

if (mysqli_query($conn, $tdatosGenerales)) {
	echo "<script>console.log('Table datos_generales created successfully');</script>";
} else {
	echo "<script>console.log('Error creating table');</script>";
}

$tfavoritos = "CREATE TABLE favoritos (
	id INT(3) PRIMARY KEY,
	direccion VARCHAR(100),
	ciudad VARCHAR(50),
	telefono VARCHAR(20),
	cpostal INT(10),
	tipo VARCHAR(50),
	precio VARCHAR(20)
	)";

if (mysqli_query($conn, $tfavoritos)) {
	echo "<script>console.log('Table favoritos created successfully');</script>";
} else {
	echo "<script>console.log('Error creating table');</script>";
}

mysqli_close($conn);
