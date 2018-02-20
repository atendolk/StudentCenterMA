<?php


function Connect()
{
 $dbhost = "localhost3308";
 $dbuser = "root";
 $dbpass = "";
 $dbname = "students_classesdb";

 // Create connection
 $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);

 return $conn;
}

?>
