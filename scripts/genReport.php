<?php include_once 'dbConnection.php'; ?>
<?php

if (isset($_POST["reporte"])) {
	$query = "SELECT * FROM datos_generales";
	$res = mysqli_query($conn, $query);
	if (mysqli_num_rows($res) > 0) {
		$export .= '
 <table>
 <tr>
 <th> id </th>
 <th>direccion</th>
 <th>ciudad</th>
 <th>telefono</th>
 <th>cpostal</th>
 <th>tipo></th>
 <th>precio></th>
 </tr>
 ';
		while ($row = mysqli_fetch_array($res)) {
			$export .= '
 <tr>
 <td>' . $row["id"] . '</td>
 <td>' . $row["direccion"] . '</td>
 <td>' . $row["ciudad"] . '</td>
 <td>' . $row["telefono"] . '</td>
 <td>' . $row["cpostal"] . '</td>
 <td>' . $row["tipo"] . '</td>
 <td>' . $row["precio"] . '</td>
 </tr>
 ';
		}
		$export .= '</table>';
		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment; filename=reporte.xls');
		echo $export;
	}
}
