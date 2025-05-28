<?php
if (isset($_POST['submit'])) {
    if (isset($_FILES['image']) && $_FILES['image']['error'] === 0) {
        $image = $_FILES['image'];
        $imageName = basename($image['name']);
        $imageTmp = $image['tmp_name'];
        $imageSize = $image['size'];
        $imageType = strtolower(pathinfo($imageName, PATHINFO_EXTENSION));

        $allowed = ['jpg', 'jpeg', 'png', 'gif'];

        if (in_array($imageType, $allowed)) {
            if (!is_dir("uploads")) {
                mkdir("uploads");
            }

            $targetPath = "uploads/" . uniqid() . "_" . $imageName;

            if (move_uploaded_file($imageTmp, $targetPath)) {
                echo "Image uploaded successfully!<br>";
                echo "<img src='$targetPath' width='300'>";
            } else {
                echo "Failed to move the uploaded file.";
            }
        } else {
            echo "Only JPG, JPEG, PNG, and GIF files are allowed.";
        }
    } else {
        echo "No file uploaded or unknown error.";
    }
}
?>
