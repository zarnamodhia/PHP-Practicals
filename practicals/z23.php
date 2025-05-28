<?php
$host = "localhost";
$user = "root";
$pass = "sgh2025";
$db = "blood_bank";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$blood = $_POST['blood_group'];
$contact = $_POST['contact'];

$sql = "INSERT INTO donors (name, blood_group, contact) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $name, $blood, $contact);
$stmt->execute();

echo "Donor registered successfully.<br><a href='onlineBloodBank.php'>Back to Home</a>";
?>
