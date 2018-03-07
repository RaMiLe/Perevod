<?php
session_start();

mysql_connect ("asus20","Deneg","Rosbank20");
mysql_select_db ("asus97");
mysql_query("SET NAMES utf8");

$login = $_SESSION['login'];
$password = $_SESSION['password'];
$id_user = $_SESSION['id'];
;
?>
CREATE TABLE `users` (
`id` INT NOT NULL AUTO_INCREMENT ,
`login` VARCHAR( 20 ) NOT NULL ,
`password` VARCHAR( 35 ) NOT NULL ,
`email` VARCHAR( 50 ) NOT NULL ,
`reg_date` VARCHAR( 32 ) NOT NULL ,
`name_user` VARCHAR( 32 ) NOT NULL ,
`lastname` VARCHAR( 32 ) NOT NULL ,
PRIMARY KEY ( `id` )
)
