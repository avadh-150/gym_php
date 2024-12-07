<?php
include "access.php";
?>
<!DOCTYPE html>
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
</style>

<body>
    <?php include "navbar.php"; ?>

    <div class="msin-contect">
        <div class="header">
            <div class="title">
                <span>User</span>
                <h2>Members</h2>

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
                <h3 class="title"> Member users </h3>
                <a href="addmember.php">

                    <button id="btn"><span>+</span>New</button>
                </a>
                <div class="t-contect">
                    <table border="1px">
                        <thead>
                            <tr>

                                <th>ID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>User name</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Contact</th>
                                <th>Gender</th>
                                <th>Birth Date</th>
                                <th>City</th>
                                <th>Join date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                         <?php
                        include "connection.php";
                        $sql = "select * from registration";
                        $result = mysqli_query($conn, $sql) or die("some query issues....");
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <td><?php echo $row['user_id'] ?></td>
                            <td><?php echo $row['fname'] ?></td>
                            <td><?php echo $row['lname'] ?></td>
                            <td><?php echo $row['user_name'] ?></td>
                            <td><?php echo $row['email'] ?></td>
                            <td><?php echo $row['password'] ?></td>
                            <td><?php echo $row['contact'] ?></td>
                            <td><?php echo $row['gender'] ?></td>
                            <td><?php echo $row['bod'] ?></td>
                            <td><?php echo $row['city'] ?></td>
                            <td><?php echo $row['jdate'] ?></td>
                            <td>
                                <a href="member-update.php?id=<?php echo $row['user_id']; ?>"><button class="btn"><b>Edit</b></button></a>
                                <a href="delete.php?id=<?php echo $row['user_id']; ?>"><button class="btn" id="delete"><b>delete</b></button></a>
                            </td>
                            </tr>
                        <?php } ?>
                        </tbody>

                    </table>
                </div>
            </div>
            <?php include('footer.php'); ?>
        </div>

</body>

</html>