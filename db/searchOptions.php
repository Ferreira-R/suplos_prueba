<?php include_once 'dbConnection.php'; ?>
<?php

$qTipo = "SELECT DISTINCT(tipo) FROM datos_generales;";
$qCiudad = "SELECT DISTINCT(ciudad) FROM datos_generales;";

$tipoList = mysqli_query($conn, $qTipo);
$ciudadList = mysqli_query($conn, $qCiudad);

/* if (!mysqli_query($conn, $qTipo)) {
	echo "<script>console.log('Error getting tipo');</script>";
}
if (!mysqli_query($conn, $qCiudad)) {
	echo "<script>console.log('Error getting ciudades');</script>";
} */

// print_r($tipoList);

// mysqli_close($conn);
