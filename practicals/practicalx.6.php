<?php
session_start();

?>

<!DOCTYPE html>
<html>
<head>
    <title>Change Password</title>
</head>
<body>
    <h2>Change Your Password</h2>
    <form action="z15.php" method="POST">
        <table>
            <tr>
                <td>Old Password:</td>
                <td><input type="password" name="old_password" required></td>
            </tr>
            <tr>
                <td>New Password:</td>
                <td><input type="password" name="new_password" required></td>
            </tr>
            <tr>
                <td>Confirm New Password:</td>
                <td><input type="password" name="confirm_password" required></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Change Password"></td>
            </tr>
        </table>
    </form>
</body>
</html>
