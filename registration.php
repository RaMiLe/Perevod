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
<form method="post" action="index.php" enctype="multipart/form-data" >
  <input type="password" name="password-1" placeholder="Придумайте пароль">
          <input type="password" name="password-2" placeholder="Введите пароль еще раз">
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
$dsn = "sqlsrv:server = tcp:asus20.database.windows.net,1433; Database = Deneg";
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

    $username = $_POST['username'];
    $password_1 = $_POST['password-1'];
    $password_2 = $_POST['password-2'];
    $email = $_POST['email'];

    if (!empty($username) && !empty($password_1) && !empty($password_2) && ($password_1 == $password_2)) {
      $sql_select = "SELECT * FROM signup WHERE username = '$username'";
      $stmt = $conn->query($sql_select);
      $stmt->execute();
      $data = $stmt->fetchAll();

      if(count($data) == 0) {
        $sql_insert = "INSERT INTO signup (username, password, email) VALUES (?,?,?)";
        $stmt = $conn->prepare($sql_insert);
        $stmt->bindValue(1, $username);
        $stmt->bindValue(2, $password_1);
        $stmt->bindValue(3, $email);
        $stmt->execute();
        
        echo 'Вы зарегистрированны!';
        exit();
      }
      else {
        echo 'Такой пользователь уже существует!';
      }
    }
  }
?>


