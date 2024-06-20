<!doctype html>
<html>
<head>
    <title>Доставка</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Рыбья голова" />
    <meta name="viewport" content="width=device-width, initial-scale=0.30, minimum-scale=0, maximum-scale=5.0, user-scalable=yes" />
    <link rel="icon" href="favicon.ico?0" type="image/x-icon" />
    <link rel="shortcut icon" href="favicon.ico?0" type='image/x-icon' />
    <link rel="stylesheet" type="text/css" href="css/main.css?3" />
    <link href="css/datepicker.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="card.css" />
</head>
<body>

<main class="site-wrapper-container">

<div class="site-header-container">
    <?php require_once 'header.php'; ?>
</div>

<div class="site-menu-container">
    <?php require_once 'menu.php'; ?>
</div>

<div class="site-content-container">
    <h1>Информация о заказах</h1>
    <?php require_once 'korzina.php'; ?>
    <?php
    // Закрываем соединение с базой данных
    if ($conn !== null) {
        $conn->close();
    }
    ?>
</div>

<div class="site-footer-container">
    <?php require_once 'footer.php'; ?>
</div>

</main>

<script defer src="./scripts/tablePicker.js"></script>
<script type="text/javascript" src="scripts/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="scripts/datepicker.min.js"></script>
<script type="text/javascript" src="scripts/jquery.tablesorter.min.js"></script>
<script src="card.js"></script>
<script src="price.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $("table").tablesorter();
    });

    document.getElementById('orderForm').addEventListener('submit', function (e) {
        var totalSpan = document.querySelector('.total-cart').textContent;
        var totalPriceInput = document.getElementById('hidden-price');

        // Check if the span is not empty
        if (totalSpan.trim() !== "") {
            totalPriceInput.value = totalSpan;
        }
    });
</script>
</body>
</html>