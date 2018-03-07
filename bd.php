<?php
session_start();

mysql_connect ("asus20","Deneg","Rosbank20");
mysql_select_db ("asus97");
mysql_query("SET NAMES utf8");

$login = $_SESSION['login'];
$password = $_SESSION['password'];
$id_user = $_SESSION['id'];
?>
