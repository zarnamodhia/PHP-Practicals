<?php
include('includes/db.php');
$id = $_GET['id'];

$sql = "SELECT * FROM employees WHERE id = $id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $position = $_POST['position'];
    $salary = $_POST['salary'];

    $sql = "UPDATE employees SET name='$name', email='$email', position='$position', salary='$salary' WHERE id=$id";
    
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
    <title>Update Employee</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <h1>Update Employee</h1>
    <form action="z17'.php?id=<?php echo $id; ?>" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?php echo $row['name']; ?>" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $row['email']; ?>" required><br><br>

        <label for="position">Position:</label>
        <input type="text" id="position" name="position" value="<?php echo $row['position']; ?>"><br><br>

        <label for="salary">Salary:</label>
        <input type="number" id="salary" name="salary" value="<?php echo $row['salary']; ?>"><br><br>

        <button type="submit">Update Employee</button>
    </form>
    <a href="index.php">Back to Employee List</a>
</body>
</html>
