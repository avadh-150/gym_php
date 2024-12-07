 <!-- New! Keyboard shortcuts … Drive keyboard shortcuts have been updated to give you first-letters navigation -->
<?php
require 'config.php';

if (isset($_POST["submit"])) {

    // Check if an image file was uploaded
    if ($_FILES["image"]["error"] == 4) {
        echo "<script>alert('No image uploaded.');</script>";
    } else {
        $fileName = $_FILES["image"]["name"];
echo $fileName;
        $fileSize = $_FILES["image"]["size"];
        $tmpName = $_FILES["image"]["tmp_name"];
        $uploadDir = 'gym/'; // The directory where the file will be saved

        // Create the upload directory if it does not exist
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0755, true);
        }

        // Validate file extension
        $validImageExtensions = ['jpg', 'jpeg', 'png'];
        $imageExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

        if (!in_array($imageExtension, $validImageExtensions)) {
            echo "<script>alert('Invalid image extension.');</script>";
        } else {
            // Generate a unique name for the image to avoid overwriting
            $newImageName = $fileName; //. '.' . $imageExtension;
            $targetFile = $uploadDir . $newImageName;

            // Move the uploaded file to the target directory
            if (move_uploaded_file($tmpName, $targetFile)) {
                // Insert image filename into the database
                $query = "INSERT INTO trainer (image) VALUES ('$newImageName')";
                if (mysqli_query($conn, $query)) {
                    echo "<script>alert('Image uploaded and added to database successfully.');</script>";
                } else {
                    echo "<script>alert('Database error.');</script>";
                }
            } else {
                echo "<script>alert('Failed to upload image.');</script>";
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Upload Image File</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        Image:
        <input type="file" name="image" id="image" accept=".jpg, .jpeg, .png"> <br><br>
        <button type="submit" name="submit">Submit</button>
        
    </form>
</body>
</html>
