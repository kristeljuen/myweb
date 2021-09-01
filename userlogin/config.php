<?php

//$db_user = "root";
//$db_pass = "";
//$db_name = "useraccounts";

$host = "remotemysql.com"
$db = "E0bML7Ol6o";
$user = "E0bML7Ol6o";
$pass = "IrEZ7MoixR";
$charset = "utf8mb4";

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";


$db = new PDO($dsn,$user,$pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//$db = new PDO('mysql:host=localhost;dbname=' . $db_name . ';charset=utf8', $db_user,$db_pass);
//$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);