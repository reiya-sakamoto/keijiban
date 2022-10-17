<?php
mb_internal_encoding("UTF-8");

$pdo=new PDO("mysql:dbname=lesson1;host=localhost;","root","");

$pdo->exec("insert into 4each_keijiban(handlename,title,comments) 
values('".$_POST['handlename']."' ,'".$_POST['title']."','".$_POST['comments']."');");
header("Location:http://localhost/4each_keijiban/index.php");

?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>PHP初級課題2</title>
        <link rel="stylesheet" type="text/css" href="style2.css">
    </head>
    <body>
    </body>
</html>