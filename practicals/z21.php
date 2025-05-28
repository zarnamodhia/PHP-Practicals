<?php
$host = "localhost";
$user = "root";
$pass = "sgh2025";
$db = "blood_bank";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$result = $conn->query("SELECT * FROM donors");
?>

<!DOCTYPE html>
<html>
<head><title>Donors List</title></head>
<body>
    <h2>Registered Donors</h2>
    <table border="1" cellpadding="5">
        <tr>
            <th>ID</th><th>Name</th><th>Blood Group</th><th>Contact</th>
        </tr>
        <?php while($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['name'] ?></td>
            <td><?= $row['blood_group'] ?></td>
            <td><?= $row['contact'] ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
    <br><a href="onlineBloodBank.php">Back to Home</a>
</body>
</html>
