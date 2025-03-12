<?php 
    $servername = "209.172.60.196";
    $username = "f3450921";
    $password = "Nishita@1810";
    $db_name = "f3450921_project";
    $conn = new mysqli($servername, $username, $password, $db_name);
    if($conn->connect_error){
        die("Connection failed".$conn->connect_error);
    }
    echo "";
    
    ?>