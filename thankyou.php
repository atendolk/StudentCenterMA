<?php

require 'connection.php';
$conn    = Connect();
$name    = $conn->real_escape_string($_POST['u_firstname']);
$email   = $conn->real_escape_string($_POST['u_lastname']);
$subj    = $conn->real_escape_string($_POST['class']);
$message = $conn->real_escape_string($_POST['number']);
$query   = "INSERT into tb_cform (u_name,u_email,subj,message) VALUES('" . $name . "','" . $email . "','" . $subj . "','" . $message . "')";
$success = $conn->query($query);

if (!$success) {
    die("Couldn't enter data: ".$conn->error);

}

echo "Thank You For Contacting Us <br>";

$conn->close();

?>
