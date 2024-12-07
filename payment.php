<?php
include "access.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gym Membership Payment</title>
    <link rel="stylesheet" href="s1.css">
    <script>
        function calculateExpiryDate() {
            const monthSelect = document.getElementById('plan');
            const expiryDateInput = document.getElementById('expiry_date');
            const selectedMonth = parseInt(monthSelect.value);
            const today = new Date();
            today.setMonth(today.getMonth() + selectedMonth);
            const expiryDate = today.toISOString().split('T')[0]; // Format YYYY-MM-DD
            expiryDateInput.value = expiryDate;
        }
    </script>
</head>

<body class="pay-body">
   
    <div class="contain">
        <header>
            <h1>Gym Membership Payment</h1>
            <p>Manage and Process Member Payments</p>
        </header>
        <form action="payment.php" method="post">
<?php
include "config.php";

$uid = $_GET['id'];
$sql = "select * from tbladdpackage where id='$uid'";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    ?>   
            <div class="form-group">
                <label for="user_name">Title Name:</label>
                <input type="text" id="user_name" placeholder="Enter User Name" value="<?php echo $row['titlename'];?>" required>
            </div>
            <div class="form-group">
                <label for="price">Price:</label>
                <input type="text" id="price" placeholder="Enter Price" value="<?php echo $row['Price'];?>" required readonly>
            </div>
            <div class="form-group">
                <label for="plan">Month:</label>
                <select id="plan" name="plan" onclick="calculateExpiryDate()" required>
                    <option value="<?php echo $row['month'];?>"><?php echo $row['month'];?></option>
                    
                </select>
            </div>
            <div class="form-group">
                <label for="user_name">User Name:</label>
                <input type="text" id="user_name" name="user_name" placeholder="Enter User Name" required>
            </div>
            <div class="form-group">
                <label for="paid_date">Paid Date:</label>
                <input type="text" id="paid_date" name="paid_date" value="<?php echo date('d-m-Y');?>" required readonly>
            </div>
            <div class="form-group">
                <label for="expiry_date">Expiry Date:</label>
                <input type="date" id="expiry_date" name="expiry_date" required readonly>
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <input type="text" id="status" name="status" value="yes" required>
            </div>
            <div class="form-actions">
                <button type="submit" class="btn btn-primary" name="pay">Submit Payment</button>
                <button type="button" class="btn btn-secondary" onclick="window.history.back();">Cancel</button>
            </div>
    <?php 
    }
    ?>
        </form>
    </div>
</body>
</html>
<?php
if (isset($_REQUEST['pay'])) {
    $name = $_POST['user_name'];
    $pdate = $_POST['paid_date'];
    $edate = $_POST['expiry_date'];
    $plan = $_POST['plan'];
    $status = $_POST['status'];
    
    $sql1 = "update payment set paid_date='$pdate',expiry_date='$edate',status='$status',plan='$plan' where user_name='$name'";
    $result1 = mysqli_query($conn, $sql1);
    if ($result1) {
        header("location:index.php");
        echo "<html><script>alert('Payment Successfully Updated.')</script></html>";
    } else {
        echo "<html><script>alert('An error occurred.')</script></html>";
    }
}
?>
