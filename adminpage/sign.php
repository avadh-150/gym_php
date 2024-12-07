<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="login.css">
    <script src="js/jquery-3.7.1.min.js"></script>

</head>
<body>
<div class="head">

<div class="main">
    <form action="sign.php" id="validate" method="post">
        <h4 align="center"> Admin Login</h4>
        <p>
            <label for="Name">User Name</label><br>
            <input type="text" id="fname" name="uname" placeholder="Name"><br>
            <span id="error"></span>
        </p>
        <p>
            <label for="Password">Password</label><br>
            <input type="password" id="pass" name="pass" placeholder="Password"><br>
            <span id="error1"></span>
        </p>
        <p>
            <button type="submit" class="btn" name="login"> Login </button>
            <!-- <a class="forget" href="registration.php">create Admin account</a> -->
        </p>
        <a href="/gym/registrations.php" class="ca" align="center">Back to Normal user</a>
    </form>
</div>
</div>
</body>
</html>
  <script>
        $(document).ready(function () {
            $("#validate").submit(function (event) {

                // var valid = /^\d{10}$/;
                let name = $("#fname").val();
                let pass = $("#pass").val();
                if (name == "" || pass == "") {
                    $("span").html("Empty Value is Not allow");
                    $("span").css("color", "red");
                    $("input").css("border", "1px solid red");
                    event.preventDefault();
                }
            });
        });
    </script>

<?php 
include "connection.php";
if(isset($_REQUEST['login']))
{
$uname=$_POST['uname'];
// $pass=md5($_POST['pass']);
$pass=$_POST['pass'];
$sql="select * from tblgym where username='$uname' and pass='$pass'";
$result=mysqli_query($conn,$sql) or die("Query is failed...");
if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result))
    {
        session_start();
        $_SESSION['uname']=$row['username'];
        $_SESSION['pass']=$row['pass'];
        header("location:dashboard.php");
    }
}
else{
    
    echo "<div>Username and password is wrong......</div>";
}
}
?>