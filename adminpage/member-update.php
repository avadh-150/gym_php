<?php
include "access.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link rel="stylesheet" href="regis.css">
</head>

 <body>
    <div class="container">
        <h2>Update Members Form</h2>
        <?php
        include "connection.php";
        $uname1 = $_GET['id'];
        $sql = "select * from registration where user_id='$uname1'";
        
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($result)) {
        ?>
            <form action="member-update.php" method="post">

                <div class="form-group">
                    <label for="first_name">First Name:</label>
                    <input type="text" id="first_name" value="<?php echo $row['fname']; ?>" name="fname" required>
                </div>
                <div class="form-group">
                    <label for="last_name">Last Name:</label>
                    <input type="text" id="last_name" value="<?php echo $row['lname']; ?>" name="lname" required>
                </div>
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" id="username" value="<?php echo $row['user_name']; ?>" name="user_name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" value="<?php echo $row['email']; ?>" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" value="<?php echo $row['password']; ?>" name="pass" required>
                </div>
                <div class="form-group">
                    <label for="password">Confirm Password:</label>
                    <input type="password" id="password" value="<?php echo $row['cpassword']; ?>" name="cpass" required>
                </div>
                <div class="form-group">
                    <label for="contact">Contact:</label>
                    <input type="text" id="contact" name="pn" value="<?php echo $row['contact']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="gender">Gender:</label>
                    <select id="gender" name="gender" required>
                        <option value="male" <?php if ($row['gender'] == 'male') echo 'selected'; ?>>Male</option>
                        <option value="female" <?php if ($row['gender'] == 'female') echo 'selected'; ?>>Female</option>
                        <option value="other" <?php if ($row['gender'] == 'other') echo 'selected'; ?>>Other</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="birth_date">Birth Date:</label>
                    <input type="text" id="birth_date" value="<?php echo $row['bod']; ?>" name="bod" required>
                </div>
                <div class="form-group">
                    <label for="city">City:</label>
                    <input type="text" id="city" value="<?php echo $row['city']; ?>" name="city" required>
                </div>
                <div class="form-group">
                    <label for="join_date">Join Date:</label>
                    <input type="text" id="join_date" name="jdate" value="<?php echo $row['jdate']; ?>" required>
                </div>
                <div class="form-group">
                    <button type="submit" name="submit">Update</button>
                </div>
            </form>
        <?php
        }

        ?>
    </div>
</body>


</html>

<?php
if (isset($_REQUEST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $uname = $_POST['user_name'];
    $email = $_POST['email'];
    $pass = md5($_POST['pass']);  // For security, consider using password_hash()
    $cpass = md5($_POST['cpass']);
    $pn = $_POST['pn'];
    $gn = $_POST['gender'];
    $bod = $_POST['bod'];
    $city = $_POST['city'];
    $date = $_POST['jdate'];
    // $id = $_GET['id'];

    $s = "UPDATE registration SET lname='$lname',user_name='$uname',email='$email',password='$pass',cpassword='$cpass',contact='$pn',gender='$gn',bod='$bod',city='$city',jdate='$date' WHERE fname='$fname'";
    $result2 = mysqli_query($conn, $s) or die("Query issue...");

    if ($result2) {
        echo "<script>alert('Update successful!');</script>";
        header("Location: register_user.php");
        exit();
    }
     else {
        echo "Error occurred...";
    }
}
?>