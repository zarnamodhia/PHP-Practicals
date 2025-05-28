<?php
$host = "localhost";      // or your server name
$user = "root";           // default for XAMPP/WAMP
$pass = "";               // default for XAMPP/WAMP
$db   = "employee_system"; // your database name

$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
