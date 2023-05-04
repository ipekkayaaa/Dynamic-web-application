<?php
   $servername = "localhost";
   $username = "root"
   $password = "12345"
   $db_name= "ASRE_Management";
   
//create connection
   $conn = new mysqli($servername, $username, $password, $db_name, 3306);
  
   if($conn->connect_error){
     die("Connection failed".$conn->connect_error);

    }
    echo "Connection Successful"; 

?>