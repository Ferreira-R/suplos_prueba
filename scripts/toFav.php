<?php include_once 'dbConnection.php'; ?>
<?php

if (isset($_POST['favoriteBtn'])) {
	$favId = $_POST['favoriteBtn'];

	$toFav = "INSERT INTO favoritos
  SELECT * FROM datos_generales
  WHERE id = $favId;";

	if (mysqli_query($conn, $toFav)) {
		echo "<script>console.log('Data inserted successfully');</script>";
	} else {
		echo "<script>console.log('Error inserting data');</script>";
	}
}
