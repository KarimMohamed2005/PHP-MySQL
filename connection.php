<?php
   $host = "localhost";
   $username = "dplyr";
   $password = "dplyr";
   $dbname = "dplyr";
   // connection
   $conn = mysqli_connect($host,$username,$password,$dbname);
   //check
   if($conn){
       echo "";
   }else{
       die("Connection Failed :". mysqli_connect_error());
   }
?>
