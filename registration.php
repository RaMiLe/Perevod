<form action="verification.php" method="POST">

<table>
<tr>
<td>Логин<font color="red">*</font>:</td>
<td><input type="text" size="20" name="login"></td>
</tr>
<tr>
<td>Пароль<font color="red">*</font>:</td>
<td><input type="password" size="20" maxlength="20" name="password"></td>
</tr>
<tr>
<td>Подтверждения пароля<font color="red">*</font>:</td>
<td><input type="password" size="20" maxlength="20" name="password2"></td>
</tr>
<tr>
<td>E-mail<font color="red">*</font>:</td>
<td><input type="text" size="20" name="email"></td>
</tr>
<tr>
<td>Имя:</td>
<td><input type="text" size="20" name="name"></td>
</tr>
<tr>
<td>Фамилия:</td>
<td><input type="text" size="20" name="lastname"></td>
</tr>
<tr>
<td></td>
<td colspan="2"><input type="submit" value="Зарегистроваться" name="submit">
</td>
</tr>
</table>
</form>

<br>Поля со значком <font color="red">*</font> обязательны для заполнения
<?php
$dsn = "sqlsrv:server = tcp:asus20.database.windows.net,1433; Database = deneg";
$username = "asus97";
$password = "Rosbank20";
try {
$conn = new PDO($dsn, $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
print("Ошибка подключения к SQL Server.");
die(print_r($e));
}
if(!empty($_POST)) {
try {
$name = $_POST['name'];
$email = $_POST['email'];
$date = date("Y-m-d");
$country = $_POST['country'];
if ($name == "" || $email == "") {
echo "<h3>Не заполнены поля name и email.</h3>";
}
  ?>

