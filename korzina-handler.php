<?php
session_start();
require_once "_connect.php"; // Подключение к базе данных

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $total_price = $_POST['total_price'];
    $delivery_address = $_POST['delivery_address'];
    $user_id = 2; // Это должно быть динамическим, например, из сессии или другого источника
    $order_status = "created";
    $date = date("Y-m-d H:i:s");

    // Конвертация total_price в decimal
    $total_price = floatval($total_price);
    $delivery_address = mysqli_real_escape_string($connection, $delivery_address);

    // Выполнение SQL-запроса
    $query = "INSERT INTO t_order (total_price, delivery_address, user_id, status, date) VALUES ('$total_price', '$delivery_address', '$user_id', '$order_status', '$date')";
    if (mysqli_query($connection, $query)) {
        // Перенаправление на предыдущую страницу после успешной вставки данных
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit;
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($connection);
    }

    // Закрытие соединения
    mysqli_close($connection);
}
?>