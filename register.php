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
<title>Регистрация</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="description" content="Рыбья голова" />
<meta name="viewport" content="width=device-width, initial-scale=0.30, minimum-scale=0, maximum-scale=5.0, user-scalable=yes" />
<link rel="icon" href="favicon.ico?0" type="image/x-icon" />
<link rel="shortcut icon" href="favicon.ico?0" type='image/x-icon' />
<link rel="stylesheet" type="text/css" href="css/main.css" />
<link href="css/datepicker.min.css" rel="stylesheet" type="text/css">
<script defer src="./scripts/tablePicker.js"></script>
<script type="text/javascript" src="scripts/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="scripts/datepicker.min.js"></script>
<script type="text/javascript" src="scripts/jquery.tablesorter.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$("table").tablesorter();
	});
</script>
</head>
<body>
<div class="form-style">

      
        <div class="column-center">
        <h2>Регистрация</h2>

        <p>
         Заполните форму ниже и нажмите кнопку "Зарегистрироваться".
        </p>

            <form action="../_register.php" method="POST">
                <input type="text" name="user_name" placeholder="Имя пользователя" /><br />
                <input type="text" name="phone" placeholder="Телефон" /><br />
                <input type="text" name="user_email" placeholder="Email" /><br />
                <input type="password" name="user_pass" placeholder="Пароль от 8 до 30 символов" />
                <button type="submit" />Зарегистрироваться</button>
            </form>
        </div>

    </div>
</div>

</body>
</html>
