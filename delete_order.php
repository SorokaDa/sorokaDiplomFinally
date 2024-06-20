<?php
session_start();
require_once "_connect.php"; // Подключение к базе данных

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
    $orderId = intval($_POST['id']);

    $query = "DELETE FROM t_order WHERE id = $orderId";
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