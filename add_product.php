<?php

session_start();

if ($_SESSION['user_type'] !== 1) {
    http_response_code(404);
    exit;
}
?>
<?php


session_start();
require_once "_connect.php";
$user_id = 0;
if (isset($_COOKIE['ss_token'])) {
	$user_token = $_COOKIE['ss_token'];
} else {
	$user_token = null;
}
$res = mysqli_query($connection, "SELECT * FROM `ss_users` WHERE (`token` = '$user_token') LIMIT 1;");
if (mysqli_num_rows($res) > 0) {
	$row = mysqli_fetch_assoc($res);

	$user_id = $row['id_user'];
	$user_email = $row['email'];
	$user_name = $row['username'];
	$user_phone = $row['phone'];
	$user_type = $row['type'];
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $weight = $_POST['weight'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $image = $_POST['image'];

    $query = "INSERT INTO t_meal (title, description, weight, price, quantity, image) VALUES ('$title', '$description', $weight, $price, $quantity, '$image')";

    if (mysqli_query($connection, $query)) {
        echo "Product added successfully!";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($connection);
    }

    mysqli_close($connection);
}
?>

<!doctype html>
<html>
<head>
    <title>Добавить продукт</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="admin.css" />
</head>
<body>
    <main class="admin-wrapper">
        <h1>Добавить продукт</h1>
        <form class="formAdmin" action="add_product.php" method="POST">
            <label style="color:white" for="title">Название:</label>
            <input  type="text" id="title" name="title" required><br>
            <label style="color:white" for="description">Описание:</label>
            <textarea id="description" name="description" required></textarea><br>
            <label style="color:white" for="weight">Вес (г):</label>
            <input  type="number" id="weight" name="weight" required><br>
            <label style="color:white" for="price">Цена:</label>
            <input  type="number" step="0.01" id="price" name="price" required><br>
            <label style="color:white" for="quantity">Количество:</label>
            <input  type="number" id="quantity" name="quantity" required><br>
            <label style="color:white" for="image">Изображение (URL):</label>
            <input  type="text" id="image" name="image" required><br>
            <button type="submit">Добавить</button>
        </form>
    </main>
</body>
</html>