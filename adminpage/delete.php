<?php
include "access.php";
?>
<?php
include "connection.php";
if ($_GET['name']) {
    $uname = $_GET['name'];
    $sql = "delete from tblgym where fname='$uname'";
    $result = mysqli_query($conn, $sql) or die("Query Falied.................");
    if ($result) {
        header("location:admin_user.php");
    } else {
        echo "<h1>404</h1>";
    }
}
if ($_GET['id']) {
    $uname1 = $_GET['id'];
    $sql1 = "delete from registration where user_id=$uname1";
    $sql2 = "delete from login where user_id=$uname1";
    
    $result1 = mysqli_query($conn, $sql1) or die("Query Falied.................");
    $result2 = mysqli_query($conn, $sql2) or die("Query Falied. login................");
    if ($result1 && $result2) {
        header("location:register_user.php");
    } else {
        echo "<h1>404</h1>";
    }
}
if ($_GET['t_id']) 
{
    $uname2 = $_GET['t_id'];
    $sql1 = "delete from trainer where T_id=$uname2";
    $result1 = mysqli_query($conn, $sql1) or die("Query Falied.................");
    if ($result1) {
        header("location:trainer_admin.php");
    } else {
        echo "<h1>404</h1>";
    }
}
if($_GET['pid'])
{
  $pid = $_GET['pid'];
  $sql = "delete from tbladdpackage where id='$pid'";
  $result = mysqli_query($conn, $sql) or die("Query Falied.................");
  if ($result) {
      header("location:manage-post.php");
  } else {
      echo "<h1>404</h1>";
  } 
}

?> 