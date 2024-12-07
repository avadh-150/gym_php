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
    <style>
      
    </style>
</head>
<body>
    <div class="container">
        <h2>Add Members Form</h2>
        <form action="addmember.php" method="post">
            
            <div class="form-group">
                <label for="first_name">Full Name:</label>
                <input type="text" id="first_name" name="fname" required>
            </div>
            <div class="form-group">
                <label for="last_name">Last Name:</label>
                <input type="text" id="last_name" name="lname" required>
            </div>
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="user_name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="pass" required>
            </div>
            <div class="form-group">
                <label for="password">Conform Password:</label>
                <input type="password" id="password" name="cpass" required>
            </div>
            <div class="form-group">
                <label for="contact">Contact:</label>
                <input type="text" id="contact" name="pn" required>
            </div>
            <div class="form-group">
                <label for="gender">Gender:</label>
                <select id="gender" name="gender" required>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
            </div>
            <div class="form-group">
                <label for="birth_date">Birth Date:</label>
                <input type="date" id="birth_date" name="bod" required>
            </div>
            <div class="form-group">
                <label for="city">City:</label>
                <input type="text" id="city" name="city" required>
            </div>
            <div class="form-group">
                <label for="join_date">Join Date:</label>
                <input type="date" id="join_date" name="jdate" required>
            </div>
            <div class="form-group">
                <button type="submit" name="submit">Register</button>
            </div>
        </form>
    </div>
</body>
</html>
<?php
$conn = mysqli_connect("localhost", "root", "", "gymsite");
if (isset($_REQUEST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $uname = $_POST['user_name'];
    $email = $_POST['email'];
    $pass = md5($_POST['pass']);
    $cpass = md5($_POST['cpass']);
    // $cpass = $_POST['cpass'];
    $pn = $_POST['pn'];
    $gn = $_POST['gender'];
    $bod = $_POST['bod'];
    $city = $_POST['city'];
    $date = $_POST['jdate'];
    $status = 'no';

    $sql = "insert into registration(fname,lname,user_name,email,password,cpassword,contact,gender,bod,city,jdate) values('$fname','$lname','$uname','$email','$pass','$cpass','$pn','$gn','$bod','$city','$date')";
    $sql1 = "insert into login(user_name,password) values('$uname','$pass')";
    $sql2 = "insert into payment(user_name,status) values('$uname','$status')";
    $pay = mysqli_query($conn, $sql2) or die("some query issues with payment....");
    $login = mysqli_query($conn, $sql1) or die("some query issues with login....");
    $result = mysqli_query($conn, $sql) or die("some query issues....");
    if ($result && $login && $pay) {
        header("location:register_user.php");
    } else {
        echo "error......";
    }
}
?>