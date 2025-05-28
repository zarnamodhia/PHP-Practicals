<?php
require 'db.php';

$employee_id = $_POST['employee_id'];
$password = $_POST['password'];

$sql = "SELECT * FROM employees WHERE employee_id = ? AND password = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $employee_id, $password);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo "Login successful. Welcome, " . $employee_id . "!";
    // You can redirect to a dashboard here using: header("Location: dashboard.php");
} else {
    echo "Invalid ID or password.";
}
?>
