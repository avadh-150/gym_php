<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<!-- <link rel="stylesheet" href=""> -->
	<script src="/adminpage/js/jquery-3.7.1.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
	
	<link href="styles.css" rel="stylesheet">
	<title>Gym Management System</title>

</head>
<style>	

</style>

<body class="body">


	<main id="main" class=" bg-dark">
		<div id="login-left">
		</div>

		<div id="login-right">
			<div class="card col-md-8">
				<div class="card-body">
					<h1 align="center">Login</h1>
					<form id="login-form" action="login.php" method="post">
						<div class="form-group">
							<label for="username" class="control-label">Username</label>
							<input type="text" id="username" name="user_name" class="form-control" placeholder="Username">
							<snap></snap>
						</div>
						<div class="form-group">
							<label for="password" class="control-label">Password</label>
							<input type="password" id="password" name="password" class="form-control" placeholder="Password">
							<snap></snap>
						</div>
						<center><button class="btn-sm btn-block btn-wave col-md-4 btn-primary" type="submit" name="login">Login</button></center>
						<center>

							<a href="registrations.php" class="back-to-top"><i class="icofont-simple-up"></i>creat Account</a>
						</center>
					</form>
				</div>
			</div>
		</div>


	</main>
</body>
</html>
<script>
        $(document).ready(function () {
            $("#login-form").submit(function (event) {

                // var valid = /^\d{10}$/;
                let name = $("#username").val();
                let pass = $("#password").val();
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
include "config.php";
if(isset($_REQUEST['login']))
{
$name=$_POST['user_name'];
$pass=md5($_POST['password']);
// $pass=$_POST['password'];
$sql= "SELECT * FROM login WHERE user_name='$name' and password='$pass'";


$result=mysqli_query($conn,$sql) or die("Query is failed...");
	

if(mysqli_num_rows($result)>0){
	while($row=mysqli_fetch_assoc($result))
    {
		session_start();
        $_SESSION['username']=$row['user_name'];
        $_SESSION['pass']=$row['password'];
        header("location:index.php");
    }
}
else{
	
	echo "<script>alert('Username OR Password is Invalid');</script>";
    //include 'index.php';
}
}
?>
