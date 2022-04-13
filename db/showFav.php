<?php include_once 'dbConnection.php'; ?>
<?php

$qFav = "SELECT * FROM favoritos;";

$favObj = mysqli_query($conn, $qFav);

$favList = $favObj->fetch_all(MYSQLI_ASSOC);

// print_r($favList);
