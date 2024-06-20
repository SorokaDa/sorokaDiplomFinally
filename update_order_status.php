<?php
session_start();
require_once "_connect.php"; // Подключение к базе данных

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id']) && isset($_POST['status'])) {
    $orderId = intval($_POST['id']);
    $newStatus = mysqli_real_escape_string($connection, $_POST['status']);

    $query = "UPDATE t_order SET status = '$newStatus' WHERE id = $orderId";
    if (mysqli_query($connection, $query)) {
        echo 'success';
    } else {
        echo 'error';
    }

    // Закрытие соединения
    mysqli_close($connection);
} else {
    echo 'invalid';
}
?>