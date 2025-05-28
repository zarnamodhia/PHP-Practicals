<?php
session_start();
include "z13.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $employee_id = $_POST['employee_id'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM employees WHERE employee_id='$employee_id' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $_SESSION['employee_id'] = $row['employee_id'];
        $_SESSION['name'] = $row['name']; // assuming column 'name'
        $_SESSION['email'] = $row['email']; // assuming column 'email'
        header("Location: home.php");
        exit();
    } else {
        echo "Invalid login!";
    }
}
?>
