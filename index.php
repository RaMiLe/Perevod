<?php
session_start();

try {
    $conn = new PDO("sqlsrv:server = tcp:asus20.database.windows.net,1433; Database = Deneg", "asus97", "{Rosbank20");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
$login = $_SESSION['login'];
$password = $_SESSION['password'];
$id_user = $_SESSION['id'];
?>
Вход:
<br>
<br>
 
<form action="login.php" method="POST"><table>
<tr>
<td>Логин:</td>
<td><input type="text" name="login"></td>
</tr>

<tr>
<td>Пароль:</td>
<td><input type="password" name="password"></td>
</tr>

<tr>
<td colspan="2"><input type="submit" value="Войти" name="submit"></td>
</tr>
</table></form>

<a href="registration.php">Регистрация</a>
<a href="Rame.php"> Регистрация </a>
