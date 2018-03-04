<html>
<head>
<Title>Registration Form</Title>
<style type="text/css">
body { background-color:
</style>
</head>
<body>
<h1>Register here!</h1>
<p>Fill in your name and
email address, then click <strong>Submit</strong>
to register.</p>
<form method="post" action="index.php" enctype="multipart/form-data" >
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
