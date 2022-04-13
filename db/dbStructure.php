<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "intelcost_bienes";

// Create server connection
$dbConn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$dbConn) {
	die("Connection failed: " . mysqli_connect_error());
}
// Create database
$createDB = "CREATE DATABASE intelcost_bienes";
if (mysqli_query($dbConn, $createDB)) {
	echo "<script>console.log('Database created successfully');</script>";
} else {
	echo "<script>console.log('Error creating database');</script>: ";
}
mysqli_close($dbConn);

// Create db connection
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

$dataJSON = file_get_contents('../data-1.json', FILE_USE_INCLUDE_PATH);
$data = json_decode($dataJSON);

foreach ($data as $item) {
	$id = $item->Id;
	$direccion = $item->Direccion;
	$ciudad = $item->Ciudad;
	$telefono = $item->Telefono;
	$cpostal = $item->Codigo_Postal;
	$tipo = $item->Tipo;
	$precio = (int)str_replace(['$', ','], '', $item->Precio);

	$insertData = "INSERT INTO `datos_generales` (`id`, `direccion`, `ciudad`, `telefono`, `cpostal`, `tipo`, `precio`) VALUES ('$id', '$direccion', '$ciudad', '$telefono', '$cpostal', '$tipo', '$precio');";

	mysqli_query($conn, $insertData);
}
