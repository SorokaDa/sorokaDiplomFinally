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

?>
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
<h2 class="up" >Зона Доставки</h2>
<iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A241610cf983d84da1d5c290cd6644eb0436aeeff4f36075fb4382d31308e1d8f&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe>
   <div>

</div>
<h2 class="up _a-hide">Правила доставки</h2>
<p style='font-size: 24px;'>
Правила доставки для суши бара "Рыбья Голова" могут различаться в зависимости от филиала и региона, но обычно следующие правила являются общими:
</p>
<p>
<ul class="services__items">
<li>Минимальная сумма заказа. Обычно для доставки требуется минимальная сумма заказа, которая может различаться в зависимости от филиала. Обычно эта сумма составляет от 500 до 1000 рублей.
</li>
<li>Заказ заранее. Для того чтобы заказ был готов к нужному времени, рекомендуется оформлять его заранее, обычно за несколько часов до желаемого времени доставки.
</li>
<li>Доставка по городу. Суши бар "Рыбья Голова" доставляет заказы по городу. Стоимость доставки может зависеть от удаленности места доставки, но обычно она не превышает 300-500 рублей..</li>
<li>Оплата заказа. Обычно оплата заказа производится наличными или банковской картой при получении заказа. Также возможна оплата через интернет-платежи.
</li>
<li>Качество еды. Суши бар "Рыбья Голова" гарантирует высокое качество еды и доставки. Если у клиента возникли какие-либо претензии по качеству еды или доставки, он может связаться с рестораном и решить вопросы.
</li>
<li>Возврат и обмен товара. Если клиент обнаружил какие-то дефекты в заказе, то он может обменять его на новый или вернуть деньги. Для этого необходимо связаться с рестораном и обсудить ситуацию.</li>
<li>Обращаем внимание, что правила доставки и оплаты могут незначительно различаться в зависимости от конкретного филиала. Лучше всего уточнять эти моменты на официальном сайте суши бара "Рыбья Голова" или при оформлении заказа по телефону.</li>
</ul>
</p>

</div>







<div class="site-footer-container">
<?php require_once 'footer.php'; ?>
</div>


</main>

<script defer src="./scripts/tablePicker.js"></script>
<script type="text/javascript" src="scripts/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="scripts/datepicker.min.js"></script>
<script type="text/javascript" src="scripts/jquery.tablesorter.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$("table").tablesorter();
	});
</script>
</body>
</html>
