<?php

$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "tnp";

$conn = new mysqli($servername, $username, $pass, $dbname);

if($conn->connect_error)
{
	die("Connection Faile" . $conn->connect_error);
}

?>