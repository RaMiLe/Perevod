<html>
<head>
<Title>Registration Form</Title>
<style>
   .blok-center {
    position: absolute; /* Абсолютное позиционирование */
    width: 600px; /* Ширина блока */
    height: 400px; /* Высота блока */
    margin: auto; /* Отступ от блока */
    top: 0; /* Положение блока от верхнего края */
    bottom: 0; /* Положение блока от нижнего края */
    left: 0; /* Положение блока от левого края */
    right: 0; /* Положение блока от правого края */
   
    border: 1px solid #000; /* Рамка блока */
    padding: 10px; /* Отступ внутри блока */
    overflow: auto; /* Полоса прокрутки */
   }
</style>
</head>
<body bgcolor="#000" background="https://s1.1zoom.ru/big0/81/Russia_Mountains_Lake_469922.jpg">
	
<div class="blok-center">
<h1>Register here!</h1>
<p>Fill in your name and
email address, then click <strong>Submit</strong>
to register.</p>

 <form method="post" action="index.php" enctype="multipart/form-data" >
<input type ="text" name ="name" id ="name" placeholder ="Введите ваше имя">
<input type ="text" name ="email" id ="email" placeholder ="Ваш еmail..">
<input type ="submit" name ="submit" value ="Войти">
<a href="Rame.php"> Регистрация </a>
 
</body>
</form> 
