<?php
include "access.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gym Membership Payment</title>
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
    <link rel="stylesheet" href="style.css">
</head>
    
<body class="pay-body">
    <div class="contain">
        <header>
            <h1>Gym Membership Payment</h1>
            <p>Manage and Process Member Payments</p>
        </header>
<?php  

include "connection.php";

$uid=$_GET['id'];
$sql="select* from registration r, payment p where r.user_name=p.user_name and user_id='$uid'";
$result=mysqli_query($conn,$sql);
while ($row = mysqli_fetch_assoc($result))
{
    ?>   
        <form action="payment.php" method="post">
            <div class="form-group">
                <label for="user_id">User ID:</label>
                <input type="text" id="user_id" name="user_id" placeholder="Enter User ID" value="<?php echo $row['user_id'];?>" required>
            </div>
            <div class="form-group">
                <label for="user_name">User Name:</label>
                <input type="text" id="user_name" name="user_name" placeholder="Enter User Name" value="<?php echo $row['user_name'];?>" required>
            </div>
            <div class="form-group">
                <label for="paid_date">Paid Date:</label>
                <input type="text" id="paid_date" name="paid_date" value="<?php echo date('d-m-Y');?>" required>
            </div>
            <div class="form-group">
                <label for="plan">Month:</label>
                <select id="plan" name="plan" onchange="calculateExpiryDate()" required>
                    <option value="" disabled selected>Select Month</option>
                    <option value="3 Month">3 Months</option>
                    <option value="6 Month ">6 Months</option>
                    <option value="12 Month">12 Months</option>
                </select>
            </div>
            <div class="form-group">
                <label for="expiry_date">Expiry Date:</label>
                <input type="date" id="expiry_date" name="expiry_date" required>
            </div>
            
            <div class="form-group">
                <label for="statu">Status</label>
                <input type="text" id="status" name="status" value="yes" required>
            </div>
            <div class="form-actions">
                <button type="submit" class="btn btn-primary" name="pay">Submit Payment</button>
                <button type="button" class="btn btn-secondary" onclick="window.history.back();">Cancel</button>
            </div>
        </form>
        <?php 
    }
    ?>
    </div>
</body>
</html>
<?php
if(isset($_REQUEST['pay']))
{
    $name=$_POST['user_name'];
    $pdate=$_POST['paid_date'];
    $edate=$_POST['expiry_date'];
    $plan=$_POST['plan'];
    $status=$_POST['status'];
    $sql1="update payment set paid_date='$pdate',expiry_date='$edate',status='$status',plan='$plan' where user_name='$name'";
    $result1=mysqli_query($conn,$sql1);
    if($result1)
    {
        header("location:paidpage.php");
        echo "<html><script>alert('Payment Successfully Update..')</script></html>";
    }
    else{
        echo "<html><script>alert('occur Some erro...')</script></html>";
    }
}
?>
