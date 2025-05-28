<?php
session_start();
include 'db.php';

// Check if employee is logged in
if (!isset($_SESSION['employee_id'])) {
    header("Location: login.php");
    exit();
}

// Get employee ID to delete
if (isset($_GET['id'])) {
    $employee_id = $_GET['id'];

    // Prepare SQL to delete the employee
    $sql = "DELETE FROM employees WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $employee_id);

    if ($stmt->execute()) {
        echo "Employee profile deleted successfully. <a href='index.php'>Go back</a>";
    } else {
        echo "Error deleting profile. <a href='index.php'>Try again</a>";
    }
    $stmt->close();
} else {
    echo "Invalid request.";
}
?>
