<?php
session_start();
$connection = new mysqli("localhost", "root", "", "fish");
// $connection = mysqli_connect("localhost", "root", "", "fish");
// echo $connection;
mysqli_query($connection, "SET NAMES UTF8");
$res = mysqli_query($connection, "SELECT * FROM `t_meal`;");
$rows = array();
while ($row = mysqli_fetch_assoc($res)) {
    $rows[] = $row;
}

// Close connection
mysqli_close($connection);

// Convert the array of rows to JSON
$json_data = json_encode($rows, JSON_UNESCAPED_UNICODE);

// Output JSON
echo $json_data;
// Close connection
// mysqli_close($conn);

// while ($row = mysqli_fetch_assoc($res)) {
	
// 	echo "<div style='border:2px solid black; border-radius: 10px' class='column-center'>";
// 	echo "<div>";
// 	echo "<img  alt='$row[title]' title='$row[title]' src='$row[image]' style='width: 350px; height: 300px;' />";
// 	echo "</div>";
// 	echo "<div>";
// 	echo "<p><b>$row[title]</b></p>";
// 	echo "<p><b>Цена:  $row[price] BYN </b></p>";
// 	echo "</div>";
// 	echo "<div>";
// 	echo "<button> добавить </button>";
// 	echo "</div>";

// 	echo "</div>";
// }

?>