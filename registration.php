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
try {
    $conn = new PDO("sqlsrv:server = tcp:asus20.database.windows.net,1433; Database = Deneg", "asus97", "Rosbank20");
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
include_once("create.php");

if (isset($_POST['submit'])){
    if(empty($_POST['login']))  {
    echo '<br><font color="red"><img border="0" src="error.gif" alt="Введите логин"> Введите логин!</font>';
} 
