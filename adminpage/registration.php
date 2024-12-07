<?php  
// include "access.php";
?> 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration From</title>
    <link rel="stylesheet" href="main.css">

<style>
    .personal {
    background-color: rgba(0, 0, 0, 0.9);
    position: relative;
    background-image: url('gym/man.jpg');
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
}

</style>

</head>

<body>
    <header class="head">
        
    </header>
    <center>
        <!-- <h1 class="logo">Sky Gym</h1> -->
    </center>
    <div class="img">
        <img src="gym/gym.png" alt="">
    </div>
    <div class="title">
        <center>

            <h1 id="rege">Gym Admit Member Form</h1>
            <h4 id="dis">Join our gym and start your fitness journey today! Please fill out the form to register.</h4>

        </center>
    </div>
    <center>
        <h1 class="per_info">Personal Information</h1>
        <div class="personal">
            <img src="" alt="">

            <form action="registration.php" method="post">
                <p>
                    <label for="fname" class="name" >Full Name :</label><br>   
                    <input type="text"  id="" placeholder="First name / middle name / last name" name="name">
                   
                </p>
                <p>
                <label for="uname" class="name" >User Name :</label><br>   
                <input type="text"  id="" placeholder="User name" name="uname">
                </p>
                <p>
                    <label for="email" class="name">Email Ad : </label> <br>
                    <input type="email"  id="" placeholder="example123@gmail.com" name="email">
                    
                  
                </p>
                <p>
                    <label for="pass" class="name">Password :</label><br> 
                    <input type="password"  id="" placeholder="Password for Protection" name="pass">
                    </p>
                    <p>
                    <label for="phone" class="name">Phone no. :</label> <br>
                    <input type="number"  id="" placeholder="9187524630" name="pn">
                </p>
                <p>
                    <label for="gender" id="gen" class="name">Gender :</label><br>
                    <select name="gender" id="select" placeholder="">
                        <option select disable>Select Gender</option>
                        <option value="Male" >Male</option>
                        <option value="Female">Female</option>
                    </select>
                </p>
                <p>
                    <label for="mem" class="name">Joining :</label> <br>
                    <input type="date" id="" placeholder="Join Date" name="jdate">
                    
                </p>
                <p>
                    <button type="submit" class="btn" name="submit">Submit</button>
                </p>
                <p>
                <div class="last">
                    <p>Already have an account? <a href="sign.php">Login here</a></p>
                </div>
                </p>
            </form>
        </div>
    </center>
    <footer>

    </footer>
</body>

<?php
include "connection.php";
if(isset($_REQUEST['submit']))
{
$name=$_POST['name'];
$uname=$_POST['uname'];
 $email=$_POST['email'];
$pass=$_POST['pass'];
 $pn=$_POST['pn'];
 $gn=$_POST ['gender'];
 $date=$_POST['jdate'];

 $sql = "insert into tblgym values('$name','$uname','$email','$pass','$pn','$gn','$date')";
 $result=mysqli_query($conn,$sql) or die("some query issues....");

// echo "Inserted...............";
if($result)
{
    header ("location:admin_user.php");
}
else
{
    echo "error......";
}
}

?>

</html>

