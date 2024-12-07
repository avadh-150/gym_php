<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Post</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <div class="container">
        <h1>Update Post</h1>
        <?php
        include "connection.php";
        $pid = $_GET['pid'];
        $sql = "SELECT * FROM tbladdpackage WHERE id='$pid'";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <form action="edit-post.php" method="post">
            <input type="text" name="p_id" value="<?php echo $row['id']; ?>" hidden> <!-- Hidden input to pass the id -->
            
            <div class="form-row">
                <div class="form-group">
                    <label for="titleName">Title Name</label>
                    <input type="text" id="titleName" name="titlename" value="<?php echo $row['titlename']; ?>" placeholder="Enter title" required>
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" id="price" name="price" value="<?php echo $row['Price']; ?>" placeholder="Enter price" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="packageDuration">Package Duration</label>
                    <select id="packageDuration" name="month" required>
                        <option value="3 Month" <?php if($row['month'] == '3 Month') echo 'selected'; ?>>3 Month</option>
                        <option value="6 Month" <?php if($row['month'] == '6 Month') echo 'selected'; ?>>6 Month</option>
                        <option value="12 Month" <?php if($row['month'] == '12 Month') echo 'selected'; ?>>12 Month</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="category">Category</label>
                    <select id="category" name="category" required>
                        <option value="Simple" <?php if($row['category'] == 'Simple') echo 'selected'; ?>>Simple</option>
                        <option value="Golden" <?php if($row['category'] == 'Golden') echo 'selected'; ?>>Golden</option>
                        <option value="Premium" <?php if($row['category'] == 'Premium') echo 'selected'; ?>>Premium</option>
                    </select>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea id="description" name="description" rows="4" placeholder="Enter description"><?php echo $row['Description']; ?></textarea>
                </div>
            </div>

            <button type="submit" class="submit-btn" name="update">Update</button>
        </form>
        <?php } ?>
    </div>
</body>
</html>

<?php
include "connection.php";

if (isset($_POST['update'])) {
    $fname = $_POST['titlename'];
    $price = $_POST['price'];
    $month = $_POST['month'];
    $cate = $_POST['category'];
    $des = $_POST['description'];
    $p_id = $_POST['p_id'];

    $sql1 = "UPDATE tbladdpackage SET category='$cate', titlename='$fname', month='$month', Price='$price', Description='$des' WHERE id='$p_id'";
    
    $r1 = mysqli_query($conn, $sql1);
    
    if ($r1) {
        echo "<script>alert('Record updated successfully!');</script>";
        echo "<script>window.location.href='manage-post.php';</script>";
    } else {
        echo "<script>alert('Failed to update the record.');</script>";
    }
}
?>