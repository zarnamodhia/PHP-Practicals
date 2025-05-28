<?php
$servername = "localhost"; // Usually localhost
$username = "root";        // Database username
$password = "";            // Database password
$dbname = "employee_management"; // Database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$id = $_GET['id'];

$sql = "DELETE FROM employees WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    header('Location: index.php');
} else {
    echo "Error: " . $conn->error;
}
?>
