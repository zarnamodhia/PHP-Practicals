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

$sql = "SELECT * FROM employees";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Management</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <h1>Employee List</h1>
    <a href="z16.php">Add New Employee</a>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Position</th>
                <th>Salary</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['position']; ?></td>
                    <td><?php echo $row['salary']; ?></td>
                    <td>
                        <a href="z17.php?id=<?php echo $row['id']; ?>">Edit</a> |
                        <a href="z18.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to delete this employee?');">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>
