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
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $position = $_POST['position'];
    $salary = $_POST['salary'];

    $sql = "INSERT INTO employees (name, email, position, salary) VALUES ('$name', '$email', '$position', '$salary')";
    
    if ($conn->query($sql) === TRUE) {
        header('Location: index.php');
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Employee</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <h1>Add New Employee</h1>
    <form action="add_employee.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="position">Position:</label>
        <input type="text" id="position" name="position"><br><br>

        <label for="salary">Salary:</label>
        <input type="number" id="salary" name="salary"><br><br>

        <button type="submit">Add Employee</button>
    </form>
    <a href="index.php">Back to Employee List</a>
</body>
</html>
