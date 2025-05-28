<?php 
$host = "localhost";
$user = "root";
$pass = "sgh2025";
$db = "blood_bank";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} ?>
<!DOCTYPE html>
<html>
<head><title>Search Donors</title></head>
<body>
    <h2>Search by Blood Group</h2>
    <form method="GET">
        Blood Group:
        <select name="blood">
            <option value="">Select</option>
            <option>A+</option><option>A-</option>
            <option>B+</option><option>B-</option>
            <option>O+</option><option>O-</option>
            <option>AB+</option><option>AB-</option>
        </select>
        <input type="submit" value="Search">
    </form>

    <?php
    if (isset($_GET['blood']) && $_GET['blood'] != "") {
        $blood = $_GET['blood'];
        $stmt = $conn->prepare("SELECT * FROM donors WHERE blood_group = ?");
        $stmt->bind_param("s", $blood);
        $stmt->execute();
        $result = $stmt->get_result();

        echo "<h3>Results for Blood Group: $blood</h3>";
        echo "<table border='1' cellpadding='5'><tr><th>ID</th><th>Name</th><th>Contact</th></tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>{$row['id']}</td><td>{$row['name']}</td><td>{$row['contact']}</td></tr>";
        }
        echo "</table>";}
    ?>
    <br><a href="onlineBloodBank.php">Back to Home</a>
</body>
</html>
