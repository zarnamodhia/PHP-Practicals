<?php
session_start();
$host = "localhost";
$user = "root";
$pass = "";
$db   = "employee_system";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (!isset($_SESSION['employee_id'])) {
    header("Location: login.php");
    exit();
}

$sql = "SELECT * FROM employees";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Employee List</title>
</head>
<body>
    <h2>Employee List</h2>
    <table border="1">
        <tr>
            <th>Employee ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
        </tr>

        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>".$row['employee_id']."</td>
                        <td>".$row['name']."</td>
                        <td>".$row['email']."</td>
                        <td>
                            <a href='delete_employee.php?id=".$row['id']."' onclick='return confirm(\"Are you sure you want to delete this profile?\")'>Delete</a>
                        </td>
                    </tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No employees found</td></tr>";
        }
        ?>
    </table>
</body>
</html>
