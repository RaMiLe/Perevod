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
<html>
<head>
<Title>Registration Form</Title>
<style type="text/css">
body { background-color:
#fff; border-top: solid 10px #000;
color: #333; font-size: .85em;
margin: 20; padding: 20;
font-family: "Segoe UI",
Verdana, Helvetica, Sans-Serif;
}
h1, h2, h3,{ color: #000;
margin-bottom: 0; padding-bottom: 0; }
h1 { font-size: 2em; }
h2 { font-size: 1.75em; }
h3 { font-size: 1.2em; }
table { margin-top: 0.75em; }
th { font-size: 1.2em;
text-align: left; border: none; padding-left: 0; }
td { padding: 0.25em 2em 0.25em 0em;
border: 0 none; }
</style>
</head>
<body>
<h1>Register here!</h1>
<p>Fill in your name and
email address, then click <strong>Submit</strong>
to register.</p>
<form method="post" action="registration.php" enctype="multipart/form-data" >
<input type ="text" name ="name" id ="name" placeholder ="Введите ваше имя">
<input type ="text" name ="email" id ="email" placeholder ="Ваш еmail..">
<select name="country">
<option value="">All</option>
<option value="Russia">Russia</option>
<option value="USA">USA</option>
<option value="Germany">Germany</option>
<option value="Japan">Japan</option>
<option value="China">China</option>
</select>
<input type ="submit" name ="submit" value ="Отправить">
<input type="submit" name="filter" value="Фильтр">
</form>

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

include_once("bd.php");

if (isset($_POST['submit'])){
    if(empty($_POST['login']))  {
    echo '<br><font color="red"><img border="0" src="error.gif" alt="Введите логин"> Введите логин!</font>';
}
    if (isset($_POST['submit'])){
    if(empty($_POST['password']))  {
    echo '<br><font color="red"><img border="0" src="error.gif" alt="Введите"> Введите пароль!</font>';
}

elseif(empty($_POST['password'])) {
echo '<br><font color="red"><img border="0" src="error.gif" alt="Введите пароль !">Введите пароль!</font>';
}
elseif (!preg_match("/\A(\w){6,20}\Z/", $_POST['password'])) {
echo '<br><font color="red"><img border="0" src="error.gif" alt="Пароль слишком короткий!">Пароль слишком короткий! Пароль должен быть не менее 6 символов! </font>';
}
elseif(empty($_POST['password2'])) {
echo '<br><font color="red"><img border="0" src="error.gif" alt="Введите подтверждение пароля!">Введите подтверждение пароля!</font>';
}
elseif($_POST['password'] != $_POST['password2']) {
echo '<br><font color="red"><img border="0" src="error.gif" alt="Введенные пароли не совпадают!">Введенные пароли не совпадают!</font>';
}
elseif(empty($_POST['email'])) {
echo '<br><font color="red"><img border="0" src="error.gif" alt="Введите E-mail!">Введите E-mail! </font>';
}
elseif (!preg_match("/^[a-zA-Z0-9_\.\-]+@([a-zA-Z0-9\-]+\.)+[a-zA-Z]{2,6}$/", $_POST['email'])) {
echo '<br><font color="red"><img border="0" src="error.gif" alt="E-mail имеет недопустимий формат!">E-mail имеет недопустимий формат! Например, name@gmail.com! </font>';
}

else{
$login = $_POST['login'];
$password = $_POST['password'];
$mdPassword = md5($password);
$password2 = $_POST['password2'];
$email = $_POST['email'];
$rdate = date("d-m-Y в H:i");
$name = $_POST['name'];
$lastname = $_POST['lastname']; 

$query = ("SELECT id FROM users WHERE login='$login'");
$sql = mysql_query($query) or die(mysql_error());

if (mysql_num_rows($sql) > 0) {
echo '<font color="red"><img border="0" src="error.gif" alt="Пользователь с таким логином зарегистрированый!">Пользователь с таким логином зарегистрирован!</font>';
}
else {
$query2 = ("SELECT id FROM users WHERE email='$email'");
$sql = mysql_query($query2) or die(mysql_error());
if (mysql_num_rows($sql) > 0){
echo '<font color="red"><img border="0" src="error.gif"  alt="Пользователь с таким e-mail зарегистрированый!">Пользователь с таким e-mail уже зарегистрирован!</font>';
}
else{
$query = "INSERT INTO users (login, password, email, reg_date, name_user, lastname )
VALUES ('$login', '$mdPassword', '$email', '$rdate', '$name', '$lastname')";
$result = mysql_query($query) or die(mysql_error());;
echo '<font color="green"><img border="0" src="ok.gif"  alt="Вы успешно зарегистрировались!">Вы успешно зарегистрировались!</font><br><a href="index.php">На главную</a>';
}
}
}
}
?>
