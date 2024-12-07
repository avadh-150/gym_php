<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="homecss.css">
    <title>SkyGym</title>
</head>
<body>
<header class="header">
            <a href="" id="logo">Sky Gym !</a>
            <div class="bx bx-menu" id="menu-icon"></div>
            <nav class="navbar">
                <a href="index.php">Home</a>
                <a href="about.php">About Us</a>
                <a href="trainer.php">Trainers</a>
                <a href="Gallery.php">Gallery</a>
                <a href="adminpage/sign.php">Admin</a>
                <a href=""><?php echo $_SESSION["username"];?><i class="fas fa-user"></i></a>
                <a href="logout.php"><i class="fa fa-sign-out"
                aria-hidden="true"></i></a>
                
            </nav>
        </header>
</body>
</html>