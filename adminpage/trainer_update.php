
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trainer Information Form</title>
    <link rel="stylesheet" href="trainer_update.css">
</head>

<body>
    <div class="form-container">
        <h1>Trainer Information Form</h1>
        <?php
        include "connection.php";
        $uid = $_GET['id'];
        $sql = "SELECT * FROM trainer WHERE T_id='$uid'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        ?>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="trainer-name">Trainer Name</label>
                <input type="text" id="trainer-name" name="tname" value="<?php echo $row['Tname']; ?>" placeholder="Enter trainer's full name" required>
            </div>
            <div class="form-group">
                <label for="trainer-group">Trainer Group</label>
                <input type="text" id="trainer-group" name="tgroup" value="<?php echo $row['Tgroup']; ?>" placeholder="Enter trainer group" required>
            </div>
            <div class="form-group">
                <label for="contact">Contact</label>
                <input type="text" id="contact" name="contact" value="<?php echo $row['contact']; ?>" placeholder="Enter trainer's contact information" required>
            </div>
            <div class="form-group">
                <label for="image-code">Image Cot</label>
                <input type="text" id="thought" name="thk" value="<?php echo $row['contain']; ?>" placeholder="Enter Idea" required>
            </div>
            <div class="form-group">
                <label for="trainer-image">Upload Trainer Image (Optional)</label>
                <input type="file" id="image" name="image" accept=".jpg, .jpeg, .png">
                <p class="optional-note">Supported formats: JPG, PNG, GIF</p>
            </div>
            <div class="image-preview-container">
                <img id="image-review" src="../gym/<?php echo $row["image"]; ?>" alt="Current Image" style="max-width: 100px;">
                <p id="image-preview-text">No image selected</p>
            </div>
            <div class="form-group">
                <button type="submit" name="update">Update</button>
            </div>
        </form>
    </div>
</body>

</html>

<?php
if (isset($_POST['update'])) {
    $tname = $_POST['tname'];
    $gp = $_POST['tgroup'];
    $cn = $_POST['contact'];
    $th = $_POST['thk'];
    
    // Default to existing image
    $existingImage = $row['image'];
    $pic = $existingImage;

    // Check if a new file was uploaded
    if (isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK) {
        // Handle file upload
        $targetDir = "../gym/";
        $fileName = basename($_FILES["image"]["name"]);
        $targetFilePath = $targetDir . $fileName;

        // Move the uploaded file
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath)) {
            $pic = $fileName; // Use the new image name
        }
    }

    // Update the trainer information
    $sql1 = "UPDATE trainer SET Tname='$tname', Tgroup='$gp', contact='$cn', contain='$th', image='$pic' WHERE T_id='$uid'";
    $result1 = mysqli_query($conn, $sql1);

    if ($result1) {
        echo "<script>alert('Trainer information successfully updated.')</script>";
        echo "<script>
        window.location.href='trainer_admin.php';        
        </script>";
       // header("Location: trainer_admin.php");
        exit();
    } else {
        echo "<script>alert('An error occurred while updating.')</script>";
    }
}
?>
