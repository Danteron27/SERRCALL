<?php
    
    if (isset($_REQUEST['add'])){
        $hostDB = 'localhost:8081';
    $nameDB = 'prueba';

    $host = "mysql:host=$hostDB;dbname=$nameDB";
    $user = 'root';
    $pass = '';

    $conn = new PDO ($host, $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



        $prueba = isset($_REQUEST['prueba']) ? $_REQUEST['prueba'] : null;
        $id = isset($_REQUEST['id']) ? $_REQUEST['id'] : null;
        if($id == null){
            $id = $productos->rowCount() + 1;
        }
        $insert = "INSERT INTO uwu VALUES ('$id','$prueba');";
        $conn->exec($insert);
        echo 'AWA';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADSI</title>
</head>
<body>
    <form action="">
        <input type="checkbox" name="prueba[]" value="1">
        <input type="submit" value="UWU" name="add">
    </form>
</body>
</html>