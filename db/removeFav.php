<?php include_once 'dbConnection.php'; ?>
<?php

if (isset($_POST['removeFav'])) {
	$favId = $_POST['removeFav'];

	$removeFav = "DELETE FROM favoritos
  WHERE id = $favId;";

	if (mysqli_query($conn, $removeFav)) {
		echo "<script>console.log('Data deleted successfully');</script>";
		header("Refresh:0");
	} else {
		echo "<script>console.log('Error deleting data');</script>";
	}
}
