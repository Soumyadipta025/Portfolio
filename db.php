<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "admin"; 
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully to the SQL server and database: ";
?>
