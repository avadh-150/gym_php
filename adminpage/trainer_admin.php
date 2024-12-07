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
                <h2>Trainer</h2>

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
            <div class="table1">
                <h1 class="title">
                     Welcome Trainer Page
                </h1>
                <a href="trainer_add.php">

                    <button id="btn"><span>+</span>New</button>
                </a>
                <hr>
                <hr>
                <table border="1px">
                    <thead>
                        <tr>

                            <th>ID.No</th>
                            <th>Trainer Name</th>
                            <th>Group</th>
                            <th>Contact No.</th>
                            <th>Thoughts</th>
                            <!-- <th>Plan</th> -->
                            <th>Picture</th>
                            <th>Update</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include "connection.php";
                        $sql = "select * from trainer";
                        $result = mysqli_query($conn, $sql) or die("some query issues....");
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <tr>
                                <td><?php echo $row['T_id'] ?></td>
                                <td><?php echo $row['Tname'] ?></td>
                                <td><?php echo $row['Tgroup'] ?></td>
                                <td><?php echo $row['contact'] ?></td>
                                <td><?php echo $row['contain'] ?></td>
                                <!-- <td><?php echo $row['image'] ?></td> -->
                                <td class="pic">
                                    <!-- left the image displaying   -->
                                    <img src="../gym/<?php echo $row['image']; ?>" alt="">

                                </td>
                                <td>
                                    <a href="trainer_update.php?id=<?php echo $row['T_id']; ?>"><button class="btn"><b>update</b></button></a>
                                    <a href="delete.php?t_id=<?php echo $row['T_id']; ?>"><button class="btn" id="red">delete</button></a>
                                </td>
                            </tr>
                        <?php

                        } ?>
                    </tbody>
                    </tbody>
                </table>
            </div>
        </div>
</body>

</html>