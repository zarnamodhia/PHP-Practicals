<?php
session_start();
if (!isset($_SESSION['employee_id'])) {
    header("Location: practicalx.4.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Employee Home</title>
</head>
<body>
    <h2>Welcome, <?php echo $_SESSION['name']; ?>!</h2>
    <p><strong>Employee ID:</strong> <?php echo $_SESSION['employee_id']; ?></p>
    <p><strong>Email:</strong> <?php echo $_SESSION['email']; ?></p>

    <p><a href="z10.php">Logout</a></p>
</body>
</html>
