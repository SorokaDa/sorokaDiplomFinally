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


// Получение информации о заказах из базы данных
$query = "SELECT id, total_price, delivery_address, status, date FROM t_order ORDER BY date DESC";
$result = mysqli_query($connection, $query);
?>

<!doctype html>
<html>
<head>
    <title>Управление заказами</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="admin.css" />
    <script type="text/javascript" src="scripts/jquery-3.2.1.min.js"></script>
</head>
<body>

<main class="site-wrapper-container">


<div class="site-content-container">
    <h1>Управление заказами</h1>
    <table id="ordersTable">
        <thead>
            <tr>
                <th>ID</th>
                <th>Цена</th>
                <th>Адрес доставки</th>
                <th>Дата</th>
                <th>Статус</th>
                <th>Действия</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = mysqli_fetch_assoc($result)): ?>
                <tr data-id="<?php echo $row['id']; ?>">
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['total_price']; ?></td>
                    <td><?php echo $row['delivery_address']; ?></td>
                    <td><?php echo $row['date']; ?></td>
                    <td class="status"><?php echo $row['status']; ?></td>
                    <td>
                        <button class="update-status btn-blue" data-status="Готовится">Готовится</button>
                        <button class="update-status btn-green" data-status="Доставляется">Доставляется</button>
                        <button class="delete-order btn-red" data-status="Завершен">Завершен</button>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>

<div class="site-footer-container">
    <?php require_once 'footer.php'; ?>
</div>

</main>

<script type="text/javascript">
    $(document).ready(function() {
        $('.update-status').click(function() {
            var row = $(this).closest('tr');
            var orderId = row.data('id');
            var newStatus = $(this).data('status');

            $.ajax({
                url: 'update_order_status.php',
                method: 'POST',
                data: { id: orderId, status: newStatus },
                success: function(response) {
                    if (response === 'success') {
                        row.find('.status').text(newStatus);
                    } else {
                        alert('Не удалось обновить статус заказа.');
                    }
                }
            });
        });

        $('.delete-order').click(function() {
            var row = $(this).closest('tr');
            var orderId = row.data('id');

            $.ajax({
                url: 'delete_order.php',
                method: 'POST',
                data: { id: orderId },
                success: function(response) {
                    if (response === 'success') {
                        row.remove();
                    } else {
                        alert('Не удалось удалить заказ.');
                    }
                }
            });
        });
    });
</script>

</body>
</html>

<?php
// Закрытие соединения
mysqli_close($connection);
?>