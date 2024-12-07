<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration From</title>
    <link rel="stylesheet" href="main_sign.css">

</head>

<body>
    <header class="head">
    </header>
    <div class="img">
        <img src="gym/gym.png" alt="">
    </div>
    <div class="title">
        <center>

            <h1 id="rege">Gym Registration Form</h1>
            <h4 id="dis">Join our gym and start your fitness journey today! Please fill out the form to register.</h4>

        </center>
    </div>
    <center>
        <h1 class="per_info">Personal Information</h1>
    </center>
    <div class="personal">
        <img src="" alt="">

        <form action="registrations.php" method="post">
            <div id="f1">
                <p id="f2">
                    <label for="fname" class="name">First Name :</label><br>
                    <input type="text" id="first" placeholder="First name" name="fname">

                </p>
                <p id="f3">
                    <label for="fname" class="name">Last Name :</label><br>
                    <input type="text" id="first" placeholder="Last name" name="lname">

                </p>
            </div>
            <p>
                <label for="uname" class="name" id="user">User Name :</label><br>
                <input type="text" id="" placeholder="User name" name="username">
            </p>
            <p>
                <label for="email" class="name">Email Ad : </label> <br>
                <input type="email" id="" placeholder="example123@gmail.com" name="email">

            </p>
            <p>
                <label for="pass" class="name">Password :</label><br>
                <input type="password" id="" placeholder="Password for Protection" name="pass">
            </p>
            <p>
                <label for="cpass" class="name">Comfirm Passwpord:</label><br>
                <input type="password" id="" placeholder="Confirm Password" name="cpass">
            </p>
            <p>
                <label for="phone" class="name">Contact Number :</label> <br>
                <input type="number" id="" placeholder="9187524630" name="pn">
            </p>
            <p>
                <label for="gender" id="gen" class="name">Gender :</label><br>
                <select name="gender" id="select" placeholder="">
                    <option disabled selected>Select Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </p>
            <p>
                <label for="mem" class="name">Birth Date :</label> <br>
                <input type="date" id="" placeholder="Birth Date" name="bod">

            </p>
            <p>
                <label for="mem" class="name">City</label> <br>
                <input type="text" id="" placeholder="City" name="city">

            </p>

            <p>
                <label for="mem" class="name">Joining Date :</label> <br>
                <input type="date" id="" placeholder="Join Date" name="jdate">

            </p>
            <p>
                <button type="submit" class="btn" name="submit">Submit</button>
            </p>
            <p>
            <div class="last">
                <p>Already have an account? <a href="login.php">Login here</a></p>
            </div>

            </p>
        </form>
    </div>
    <footer>

    </footer>
</body>

</html>

<?php
$conn = mysqli_connect("localhost", "root", "", "gymsite");
if (isset($_REQUEST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $uname = $_POST['username'];
    $email = $_POST['email'];
    $pass = md5($_POST['pass']);
    $cpass = md5($_POST['cpass']);
    $pn = $_POST['pn'];
    $gn = $_POST['gender'];
    $bod = $_POST['bod'];
    $city = $_POST['city'];
    $date = $_POST['jdate'];
    $status = "no";

    // Validataions:

    $val = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";
    if (!preg_match($val, $email)) {
        $ErrMsg = "Email is not valid.";
        echo $ErrMsg;
    } else if (!preg_match("/^[0-9]*$/", $mobileno)) {
        $ErrMsg = "Only numeric value is allowed.";
        echo $ErrMsg;
    } else {
        $sql = "insert into registration(fname,lname,user_name,email,password,cpassword,contact,gender,bod,city,jdate) values('$fname','$lname','$uname','$email','$pass','$cpass','$pn','$gn','$bod','$city','$date')";
        $sql1 = "insert into login(user_name,password) values('$uname','$pass')";
        $sql2 = "insert into payment(user_name,status) values('$uname','$status')";
        $sql3 = "";
        $pay = mysqli_query($conn, $sql2) or die("some query issues with payment....");
        $login = mysqli_query($conn, $sql1) or die("some query issues with login....");
        $result = mysqli_query($conn, $sql) or die("some query issues....");
        if ($result && $login && $pay) {
            header("location:login.php");
        } else {
            echo "error......";
        }
    }
}
?>