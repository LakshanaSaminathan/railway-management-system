<link rel="stylesheet" href="style.css" />
<?php
$servername = "lakshana.mysql.database.azure.com";
$username = "lakshana";
$password = "sami@2003";
$dbname = "railway";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) 
{
 die("Connection failed: " . $conn->connect_error);
} 
?>
