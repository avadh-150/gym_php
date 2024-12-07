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
        
            <form action="" method="POST">

                <div class="form-group">
                    <label for="trainer-name">Trainer Name</label>
                    <input type="text" id="trainer-name" name="tname"  placeholder="Enter trainer's full name" required>
                </div>
                <div class="form-group">
                    <label for="trainer-group">Trainer Group</label>
                    <input type="text" id="trainer-group" name="tgroup"  placeholder="Enter trainer group" required>
                </div>
                <div class="form-group">
                    <label for="contact">Contact</label>
                    <input type="text" id="contact" name="contact"  placeholder="Enter trainer's contact information" required>
                </div>
                <div class="form-group">
                    <label for="image-code">Image Code</label>
                    <input type="text" id="thought" name="thk"  placeholder="Enter Idea" required>
                </div>
                <div class="form-group">
                    <label for="trainer-image">Upload Trainer Image (Optional)</label>
                    <input type="file" id="image" name="image" accept=".jpg, .jpeg, .png">
                    <p class="optional-note">Supported formats: JPG, PNG, GIF</p>
                </div>
               
                <div class="form-group">
                    <button type="submit" name="submit">Add New</button>
                </div>
            </form>
       
    </div>
</body>

</html>

<?php
include "connection.php";
if (isset($_REQUEST['submit'])) {
    $tname = $_POST['tname'];
    $gp = $_POST['tgroup'];
    $cn = $_POST['contact'];
    $th = $_POST['thk'];
    $pic = $_POST['image'];
    $sql1 = "insert into trainer(Tname,Tgroup,contact,contain,image) values('$tname','$gp','$cn','$th','$pic')";
    $result1 = mysqli_query($conn, $sql1);
    if ($result1) {
        echo "<html><script>alert('Payment Successfully Update..')</script></html>";
        header("location:trainer_admin.php");
    } else {
        echo "<html><script>alert('occur Some erro...')</script></html>";
    }
}

?>