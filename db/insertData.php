<?php include_once 'dbConnection.php'; ?>
<?php

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

	if (mysqli_query($conn, $insertData)) {
		echo "<script>console.log('Data inserted successfully');</script>";
	} else {
		echo "<script>console.log('Error inserting data');</script>";
	}
}

mysqli_close($conn);
