<!-- 
<?php //include "access.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
   
       
        <div class="table1">
        
            <hr>
            <hr>
           
                <table border="1px" class="table">
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
                    // $ses_uname=$_SESSION["username"];
                    // include "config.php";
                    //     $sql = "select * from registration r,payment p where r.user_name=p.user_name and status='yes' and r.user_name='$ses_uname'";
                    //     $result = mysqli_query($conn, $sql) or die("some query issues....");
                    //     while ($row = mysqli_fetch_assoc($result)) {
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
                          
                            </tr>
                        <?php  // } ?>
                        </tbody>
                    </tbody>
                </table>
            </div>
          
</body>

</html> -->


<?php include "access.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->

    <title>Gym Member Information</title>

    <style>
        /* Basic Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
        }

        .container {
            max-width: 1200px;
            margin: 40px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h1 {
            text-align: center;
            color: #333;
            font-size: 28px;
            margin-bottom: 20px;
        }

        .table1 {
            width: 100%;
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 12px 15px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
            color: #333;
            font-weight: bold;
            text-transform: uppercase;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        /* Add some margin to the table container */
        .table1 {
            margin-top: 30px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            table, thead, tbody, th, td, tr {
                display: block;
                width: 100%;
            }

            thead tr {
                display: none;
            }

            tr {
                margin-bottom: 20px;
            }

            td {
                text-align: right;
                padding-left: 50%;
                position: relative;
            }

            td::before {
                content: attr(data-label);
                position: absolute;
                left: 15px;
                text-align: left;
                font-weight: bold;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Payment Information</h1>
        
        <div class="table1">
            <table>
                <thead>
                    <tr>
                        <th>User Name</th>
                      
                        <th>Paid Date</th>
                        <th>Expiry Date</th>
                        <th>Status</th>
                        <th>Plan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $ses_uname=$_SESSION["username"];
                        include "config.php";
                        $sql = "SELECT * FROM payment  WHERE status='yes' AND user_name='$ses_uname'";
                        $result = mysqli_query($conn, $sql) or die("Some query issues...");
                        
                        while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <tr>
                        <td data-label="Name"><?php echo $row['user_name']; ?></td>
                        
                        <td data-label="Paid Date"><?php echo $row['paid_date']; ?></td>
                        <td data-label="Expiry Date"><?php echo $row['expiry_date']; ?></td>
                        <td data-label="Status"><?php echo $row['status']; ?></td>
                        <td data-label="Plan"><?php echo $row['plan']; ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
