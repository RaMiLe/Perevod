<?php
try {
    $conn = new PDO("sqlsrv:server = tcp:asus20.database.windows.net,1433; Database = Deneg", "asus97", "Rosbank20");
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
include_once("createtable.php");
if (isset($_POST['submit'])){
    if(empty($_POST['login']))  {
    echo '<br><font color="red"><img border="0" src="error.gif" alt="Введите логин"> Введите логин!</font>';
} 
  ?>
