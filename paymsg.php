<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>SkyGym</title>
</head>
<body>
<header class="header">
            
            <nav class="navbar">
              <?php 
              include "config.php";
              $sql = "select * from registration r,payment p where r.user_name=p.user_name and status='yes'";
              $results = mysqli_query($conn, $sql);
  
  
              ?>
                <a href="show.php">View The Payment</a>
                <a href=""><?php echo $_SESSION["username"];?><i class="fas fa-user"></i></a>
            
                
            </nav>
        </header>
</body>
</html>