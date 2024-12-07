<?php
include "access.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="main_sign.css">
    <link rel="stylesheet" href="demo.css">

    <title>Document</title>
</head>

<body><?php include "navbar.php"; ?>

    <div class="container">


        <div class="table1">
            <h1 class="title"> Update the </h1>

            <div class="t-contect">

                <h1>Members Records</h1>
                <?php
                include "connection.php";
                $user_name = $_GET['name'];
                $sql = "select * from tblgym where fname='$user_name'";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {

                ?>
                    <form action="update_member.php" method="post">

                        <p>
                            <label for="fname" class="name">Full Name :</label><br>
                            <input type="text" value="<?php echo $row['fname']; ?>"  name="name">

                        </p>
                        <p>
                            <label for="fname" class="name">User Name :</label><br>
                            <input type="text" value="<?php echo $row['username']; ?>" name="uname">

                        </p>
                        <p>
                            <label for="email" class="name">Email Ad : </label> <br>
                            <input type="email" value="<?php echo $row['email']; ?>"  name="email">


                        </p>
                        <p>
                            <label for="pass" class="name">Password :</label><br>
                            <input type="password" value="<?php echo $row['pass']; ?>" name="pass">
                        </p>
                        <p>
                            <label for="phone" class="name">Phone no. :</label> <br>
                            <input type="number" value="<?php echo $row['phone']; ?>" name="pn">
                        </p>
                        <p>
                            <label for="gender" id="gen" class="name">Gender :</label><br>
                            <select name="gender" id="select" placeholder="" >

                                <option disabled selected>Select Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </p>
                        <p>
                    <label for="mem"  class="name">Joining :</label> <br>
                    <input type="text" value="<?php  echo $row['jdate'];?>" name="jdate">

                            </p>
                            <p>
                                <button type="submit" class="btn" value="" name="update">update</button>
                            </p> 
                    </form>
                <?php
                }
                include "footer.php";
                ?>
            </div>
        </div>
    </div>
    </div>
</body>
</html>
<?php
if (isset($_REQUEST['update'])){ 
    $nm = $_POST['name'];
    $unm = $_POST['uname'];
    $el = $_POST['email'];
    $ps = $_POST['pass'];
    $pn = $_POST['pn'];
    $gen=$_POST['gender'];
    $jd=$_POST['jdate'];
    $sql1 = "update tblgym set fname ='$nm',email='$el',pass='$ps',phone='$pn',gender='$gen',jdate='$jd' where username='$unm'";
    $r1 = mysqli_query($conn, $sql1);
    if ($r1) {
        header("Location: http://localhost/gym/adminpage/admin_user.php");
    } else {
        echo "<h1>404</h1>";
    }
}
?>