<?php 
include "config.php";
if(isset($_REQUEST['submit'])){
$pic =$_POST['pic'];
$sql="insert into gallery values('','$pic')";
$result=mysqli_query($conn,$sql);
if($result)
{
    echo "<script> alert('Uploading is Done >.....!')</script>";
}
else{
    
    echo "<script> alert('404....!')</script>";
}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="picadd.php" method="post">

    file Upload in database:  
    <input type='file' name='pic'>
    <button type='sumbit' name='submit'>Upload</button>

    </form>
</body>
</html>