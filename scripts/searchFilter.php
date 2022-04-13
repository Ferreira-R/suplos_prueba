<?php include_once 'dbConnection.php'; ?>
<?php

if (isset($_POST['precio'])) {
	$rangeArr = preg_split("/\;/", $_POST['precio']);
	$minPrice = $rangeArr[0];
	$maxPrice = $rangeArr[1];
	$ciudadFiltro = isset($_POST['ciudad']);
	$tipoFiltro = isset($_POST['tipo']);
	$precioFiltro = isset($_POST['precio']);

	$filterSql = [];
	$parameters = [];

	if ($ciudadFiltro) {
		$filterSql[] = " ciudad = ?";
		$parameters[] = $_POST['ciudad'];
	}
	if ($tipoFiltro) {
		$filterSql[] = " tipo = ?";
		$parameters[] = $_POST['tipo'];
	}
	if ($precioFiltro) {
		$filterSql[] = " precio BETWEEN ? AND ?";
		$parameters[] = $minPrice;
		$parameters[] = $maxPrice;
	}

	$query = "SELECT * FROM datos_generales";

	if ($filterSql) {
		$query .= ' WHERE ' . implode(' AND ', $filterSql);
	}

	$stmt = mysqli_prepare($conn, $query);

	if ($parameters) {
		mysqli_stmt_bind_param($stmt, str_repeat('s', count($parameters)), ...$parameters);
	}

	$stmt->execute();
	$result = $stmt->get_result();
	$filterData = $result->fetch_all(MYSQLI_ASSOC);
	// print_r($filterData);
}

// mysqli_close($conn);
