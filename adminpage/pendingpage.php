<?php include "access.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <?php include "navbar.php"; ?>
    <div class="msin-contect">
        <div class="header">
            <div class="title">
                <span>User</span>
                <h2>Payment</h2>

            </div>
            <p id="user">
                <?php echo "Welcome " . " " . $_SESSION['uname'] . "!"  ?>
                <i class="fas fa-user"></i>
            </p>
            <div class="user_info">
                <div class="search-box">

                    <i class="fa-solid fa-search"></i>
                    <input type="text" name="" placeholder="search" id=""><br>
                    <i class="fas fa-user" class="user"></i>

                </div>
            </div>
        </div>
        <div class="container">
            <h1>
                <marquee behavior="" direction=""></marquee>
            </h1>
     
        <div class="table1">
            <h1 class="title">Welcome in Membership</h1>
            <hr>
            <hr>
           
                <table border="1px">
                    <thead>
                        <tr>

                            <th>SI.NO</th>
                            <th>Member_ID</th>
                            <th>Name</th>
                            <th>email</th>
                            <th>Contact</th>
                            <th>Gender</th>
                            <th>Status</th>
                            <!-- <th>Plan</th> -->
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                    include "connection.php";
                        $sql = "select * from registration r,payment p where r.user_name=p.user_name and status='no'";
                        $sno    = 1;
                        $result = mysqli_query($conn, $sql) or die("some query issues....");
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <tr>
                                <td><?php echo $sno ?></td>
                                <td><?php echo $row['user_id'] ?></td>
                                <td><?php echo $row['user_name'] ?></td>
                                <td><?php echo $row['email'] ?></td>
                            <td><?php echo $row['contact'] ?></td>
                            <td><?php echo $row['gender'] ?></td>
                            <td><?php echo $row['status'] ?></td>
                            <!-- <td><?php echo $row['plan'] ?></td> -->

                          
                           
                            <td>
                                <a href="payment.php?id=<?php echo $row['user_id']; ?>"><button class="btn"><b>Make Payment</b></button></a>
                            </td>
                            </tr>
                        <?php $sno++;
                    
                    } ?>
                        </tbody>
                    </tbody>
                </table>
            </div>
            </div>
</body>

</html>