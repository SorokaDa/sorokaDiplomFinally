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
<title>Контакты</title>
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

<h2 class="up _a-hide">Контакты</h2>
<div class="contact__items">
   <div class="contscts__left">
      <p>Телефон: <span>+37529241231</span></p>
      <p>Адресс: <span>улица Ожешко 22</span></p>
      <p>Почта: <span>admin@admin.com</span></p>
   </div>
   <div class="contacts__right">
   <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A2ba493289b15b1b72f16651dc8de3e5b89cfeae37e83732b99fc2c00fe1a9b4b&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe>
   </div>
</div>



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
