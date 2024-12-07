<?php
include "access.php";
?>
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
                <h2>Dashboard</h2>

            </div>
            <div class="user_info">
                <div class="search-box">

                    <i class="fa-solid fa-search"></i>
                    <input type="text" name="" placeholder="search" id=""><br>
                    <i class="fas fa-user" class="user"></i>

                </div>
            </div>
        </div>
        <div class="text">
            <h3>Welcome to Our GYM Club</h3>
            <p>
            <?php echo "Welcome " . " " . $_SESSION['uname'] . "!"  ?>
            <i class="fas fa-user"></i>
            </p>

        </div>
        <hr>
        <div class="container">
            <div class="card">
                <div class="member-card">
                    <div class="card-box">
                        <h4>

                            <?php
                            $conn = mysqli_connect("localhost", "root", "", "gymsite");

                            $query = "SELECT COUNT(status) FROM payment WHERE status='yes'";

                            $result = mysqli_query($conn, $query);
                         
                            if (mysqli_affected_rows($conn) != 0) {
                                while ($row = mysqli_fetch_array($result)){  
                                    echo $row['COUNT(status)'];
                                }
                            }
                         
                            ?>
                        </h4>
                        <span class="float-right summary_icon"><i class="fa fa-users"></i></span>
                        <h6>Active Membership Plan</h6>
                    </div>
                </div>
                <div id="orange" class="member-card">
                    <div class="card-box">
                        <h4><?php
                             //include "connecction.php";
                            $conn = mysqli_connect("localhost", "root", "", "gymsite");
                            $query = "select COUNT(*) from registration";
                            $result = mysqli_query($conn, $query);
                            if (mysqli_affected_rows($conn) != 0) {
                                while ($row = mysqli_fetch_array($result)) {
                                    echo $row['COUNT(*)'];
                                }
                            }

                            ?></h4>
                        
                        <span class="float-right summary_icon"><i class="fa fa-th-list"></i></span>
                        <h6> Total Memebers</h6>
                    </div>
                </div>
                <div id="blue" class="member-card">
                    <div class="card-box">
                        <h4><?php
                             //include "connecction.php";
                             $conn = mysqli_connect("localhost", "root", "", "gymsite");
                            $query = "select COUNT(*) from trainer";
                            $result = mysqli_query($conn, $query);
                            if (mysqli_affected_rows($conn) != 0) {
                                while ($row = mysqli_fetch_array($result)) {
                                    echo $row['COUNT(*)'];
                                }
                            }
                            ?></h4>
                        <span class="float-right summary_icon"><i class="fa fa-users"></i></span>
                        <h6>Trainer memeber</h6>
                    </div>
                </div>

            </div>


            <?php include('footer.php'); ?>
        </div>
    </div>

</body>

</html>