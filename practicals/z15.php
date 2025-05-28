<?php
session_start();
<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "employee_system";  // Replace with your actual database name

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$employee_id = $_SESSION['employee_id'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $old_password = $_POST['old_password'];
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];

    // Check if new passwords match
    if ($new_password != $confirm_password) {
        echo "New passwords do not match. <a href='change_password.php'>Try again</a>";
        exit();
    }

    // Fetch the employee's current password from the database
    $sql = "SELECT password FROM employees WHERE employee_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $employee_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Verify the old password
        if ($row['password'] == $old_password) {
            // Update the password in the database
            $update_sql = "UPDATE employees SET password = ? WHERE employee_id = ?";
            $update_stmt = $conn->prepare($update_sql);
            $update_stmt->bind_param("ss", $new_password, $employee_id);

            if ($update_stmt->execute()) {
                echo "Password updated successfully. <a href='index.php'>Go back to home</a>";
            } else {
                echo "Error updating password. <a href='change_password.php'>Try again</a>";
            }
        } else {
            echo "Old password is incorrect. <a href='change_password.php'>Try again</a>";
        }
    } else {
        echo "Employee not found. <a href='change_password.php'>Try again</a>";
    }
}
?>
