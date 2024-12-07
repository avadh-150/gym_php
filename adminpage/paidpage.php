
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
            <h1 class="title">Enjoy Out Tools</h1>
            <hr>
            <hr>
           
                <table border="1px">
                    <thead>
                        <tr>
                            <th>Member_ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Contact</th>
                            <th>Gender</th>
                            <th>Paid_date</th>
                            <th>Expiry_date</th>
                            <th>Status</th>
                            <th>Plan    </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                    include "connection.php";
                        $sql = "select * from registration r,payment p where r.user_name=p.user_name and status='yes'";
                        $result = mysqli_query($conn, $sql) or die("some query issues....");
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <tr>
                                <td><?php echo $row['user_id'] ?></td>
                                <td><?php echo $row['user_name'] ?></td>
                                <td><?php echo $row['email'] ?></td>
                                <td><?php echo $row['contact'] ?></td>
                                <td><?php echo $row['gender'] ?></td>
                            <td><?php echo $row['paid_date'] ?></td>
                            <td><?php echo $row['expiry_date'] ?></td>
                            <td><?php echo $row['status'] ?></td>
                            <td><?php echo $row['plan'] ?></td>

                          
                           
                            
                                <!-- <a href="updateweb.php?name=<?php echo $row['fname']; ?>"><button class="btn"><b>Make Payment</b></button></a> -->
                          
                            </tr>
                        <?php   } ?>
                        </tbody>
                    </tbody>
                </table>
            </div>
            </div>
</body>

</html>