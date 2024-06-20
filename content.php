<?php

if (isset($_REQUEST['a'])) {
    $a = $_REQUEST['a'];
} else {
    $a = $_REQUEST;
}

switch ($a) {

case 1:
require "reg.php";
break;

case 2:
require "online.php";
break;

case 3:
require "news.php";
break;

case 4:
require "employees.php";
break;

case 6:
require "online_edit.php";
break;

case 404:
require "error404.php";
break;

default:
require "main.php";
}
?>
