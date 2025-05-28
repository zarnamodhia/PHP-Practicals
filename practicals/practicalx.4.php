<!DOCTYPE html>
<html>
<head>
    <title>Employee Login</title>
</head>
<body>
    <h2>Employee Login</h2>
    <form action="login_process.php" method="POST">
        <table>
            <tr>
                <td>Employee ID:</td>
                <td><input type="text" name="employee_id" required></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="password" required></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Login"></td>
            </tr>
        </table>
    </form>
</body>
</html>
