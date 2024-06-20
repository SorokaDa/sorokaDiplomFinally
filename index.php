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
<title>Рыбья голова</title>
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


<div class="site-wrapper-container">
<div class="site-header-container">
<?php require_once 'header.php'; ?>
</div>

<div class="site-menu-parent">
<div class="site-menu-container">
<?php require_once 'menu.php'; ?>
</div>
</div>


<div class="site-content-container">
<?php require_once 'content.php'; ?>
</div>


<div class="site-footer-container">
<?php require_once 'footer.php'; ?>
</div>


</div>

<div class="modal-in">
	<div class="modal-in__body">
		<h1>ВХОД</h1>
		<div class="modal-in__close">&#10006;</div>
		<form action="./_login.php" method="POST">
            <input type="text" name="user_email" placeholder="Email" required /><br />
            <input type="password" name="user_pass" placeholder="Пароль" required/>
            <button type="submit" />Войти</button>
        </form>
	</div>
</div>

<script defer src="./scripts/tablePicker.js"></script>
<script type="text/javascript" src="scripts/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="scripts/datepicker.min.js"></script>
<script type="text/javascript" src="scripts/jquery.tablesorter.min.js"></script>
<script type="text/javascript">

function modal() {
  const open = document.querySelector("#btn-in");
  const close = document.querySelector(".modal-in__close");
  const modal = document.querySelector(".modal-in");
  const body = document.querySelector('body');

  console.log(open);

  open.addEventListener("click", (e) => {
    modal.classList.add('_active')
	 body.style.overflow = 'hidden';
  });

  close.addEventListener("click", (e) => {
    modal.classList.remove('_active')
	 body.style.overflow = '';
  });

  modal.addEventListener("click", (e) => {
    const target = e.target;
    if (target && target === modal) {
      modal.classList.remove("_active");
		body.style.overflow = '';
    }
  });
}
modal();


	$(document).ready(function(){
		$("table").tablesorter();
	});
</script>
</body>
</html>
