CREATE TABLE `users` (
// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:asus20.database.windows.net,1433; Database = Deneg", "asus97", "Rosbank20");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
`id` INT NOT NULL AUTO_INCREMENT ,
`login` VARCHAR( 20 ) NOT NULL ,
`password` VARCHAR( 35 ) NOT NULL ,
`email` VARCHAR( 50 ) NOT NULL ,
`reg_date` VARCHAR( 32 ) NOT NULL ,
`name_user` VARCHAR( 32 ) NOT NULL ,
`lastname` VARCHAR( 32 ) NOT NULL ,
PRIMARY KEY ( `id` )
