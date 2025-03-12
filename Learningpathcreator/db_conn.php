<?php 

$sName = "209.172.60.196";
$uName = "f3450921";
$pass = "Nishita@1810";
$db_name = "f3450921_project";

try {
    $conn = new PDO("mysql:host=$sName;dbname=$db_name", 
                    $uName, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
  echo "Connection failed : ". $e->getMessage();
}