<!DOCTYPE html>
<html>
<head>
    <title>Image Upload</title>
</head>
<body>
    <h2>Upload an Image</h2>
    <form action="z9.php" method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Select Image:</td>
                <td><input type="file" name="image" required></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Upload"></td>
            </tr>
        </table>
    </form>
</body>
</html>
