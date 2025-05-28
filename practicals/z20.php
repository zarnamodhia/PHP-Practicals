<!DOCTYPE html>
<html>
<head><title>Register Donor</title></head>
<body>
    <h2>Donor Registration</h2>
    <form action="z23.php" method="POST">
        Name: <input type="text" name="name" required><br><br>
        Blood Group:
        <select name="blood_group" required>
            <option value="">Select</option>
            <option>A+</option><option>A-</option>
            <option>B+</option><option>B-</option>
            <option>O+</option><option>O-</option>
            <option>AB+</option><option>AB-</option>
        </select><br><br>
        Contact: <input type="text" name="contact" required><br><br>
        <input type="submit" value="Register">
    </form>
    <br><a href="onlineBloodBank.php">Back to Home</a>
</body>
</html>
