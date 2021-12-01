<?php
   // Database configuration    
   $hostname = "localhost"; 
   $username = "root"; 
   $password = ""; 
   $dbname   = "admininfo";


     
   $con = new mysqli($hostname, $username, $password, $dbname); 
    
   
   if ($con->connect_error) { 
       die("Connection failed: " . $con->connect_error); 
   }
   