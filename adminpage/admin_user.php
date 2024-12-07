
<?php
include "access.php";
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="stylesheet" href="style.css">
</head>
<style>
    .table1 a #btn {
        float: right;
        width: 150px;
        height: 30px;
        color: aliceblue;
        background: #4e4e4e;
        margin-top: -25px;
        font-size: 14px;

    }

    .table1 a #btn span {
        font-size: 18px;
    }
#red
{
    background: red;
}
</style>

<body>
    <?php include "navbar.php"; ?>

    <div class="msin-contect">
        <div class="header">
            <div class="title">
                <span>User</span>
                <h2>Admin</h2>

            </div>
            <div class="user_info">
                <div class="search-box">

                    <i class="fa-solid fa-search"></i>
                    <input type="text" name="" placeholder="search" id=""><br>
                    <i class="fas fa-user" class="user"></i>

                </div>
            </div>
        </div>

        <div class="container">


            <div class="table1">
                <h3 class="title"> Members Of Admin </h3>
                <a href="registration.php">

                    <button id="btn"><span>+</span>New</button>
                </a>
                <div class="t-contect">
                <table class="table " border="1px">
        <thead class="table-head">
            <tr>
                <th>SI.NO</th>
                <th>Full Name</th>
                <th>User Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Phone</th>
                <th>Gender</th>
                <th>Join Date</th>
                <th>Modify</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <?php  
                // $conn=mysqli_connect("localhost","root","","demo") or die("connection is failed....");
                include "connection.php";

                $sql = "select * from tblgym";
                $i=1;
                $result=mysqli_query($conn,$sql) or die("some query issues....");
                while($row= mysqli_fetch_assoc($result))
                {
                ?>
                <td><?php echo $i;?></td>
                <td><?php echo $row['fname']?></td>
                <td><?php echo $row['username']?></td>
                <td><?php echo $row['email']?></td>
                <td><?php echo $row['pass']?></td>
                <td><?php echo $row['phone']?></td>
                <td><?php echo $row['gender']?></td>
                <td><?php echo $row['jdate']?></td>
                <td>

                    <!-- <a href="registration.php"><button class="btn">insert</button></a> -->
                    <a href="update_member.php?name=<?php echo $row['fname'];?>"><button class="btn">Edit</button></a>
                <a href="delete.php?name=<?php echo $row['fname'];?>"><button class="btn" id="red">delete</button></a></td>
            </tr>
            <?php
                        $i++;

        }?>
        </tbody>
    </table>
                </div>
            </div>
            <?php include('footer.php'); ?>
        </div>

</body>

</html>