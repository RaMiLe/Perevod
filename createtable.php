<?
try {
    $conn = new PDO("sqlsrv:server = tcp:asus20.database.windows.net,1433; Database = Deneg", "asus97", "Rosbank20");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
id INT NOT NULL IDENTITY(1,1),
PRIMARY KEY(id),
login` VARCHAR( 20 ) NOT NULL ,
`password` VARCHAR( 35 ) NOT NULL ,
`email` VARCHAR( 50 ) NOT NULL ,
`reg_date` VARCHAR( 32 ) NOT NULL ,
`name_user` VARCHAR( 32 ) NOT NULL ,
`lastname` VARCHAR( 32 ) NOT NULL 
date DATE)";
$conn->query($sql);
echo "<h3>Таблица создана.</h3>";
}
catch (PDOException $e) {
print("Ошибка подключения к SQL Server.");
die(print_r($e));
}
?>
