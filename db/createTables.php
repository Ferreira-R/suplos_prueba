<?php include 'dbConnection.php' ?>
<?php

// sql to create table
$tdatosGenerales = "CREATE TABLE datos_generales (
	id INT(3) PRIMARY KEY,
	direccion VARCHAR(100),
	ciudad VARCHAR(50),
	telefono VARCHAR(20),
	cpostal INT(10),
	tipo VARCHAR(50),
	precio INT(20)
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
	precio INT(20)
	)";

if (mysqli_query($conn, $tfavoritos)) {
	echo "<script>console.log('Table favoritos created successfully');</script>";
} else {
	echo "<script>console.log('Error creating table');</script>";
}

mysqli_close($conn);
