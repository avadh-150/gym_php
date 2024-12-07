<!-- 
// include "index.php";
 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.font-awesome.com/c4254e24a8.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="homecss.css">

    <title>Gym Club</title>
    <style>
        .login-button{
            background: transparent;
            color:#fff;
        }
    </style>
</head>
<body class="bd">
<div class="containet">
        <video autoplay loop muted plays-inline class="bg-clip">
            <source src="gym\beach.mp4" type="video/mp4">
        </video>
    <header class="header">
            <a href="" id="logo">SkyGym !</a>
            <div class="bx bx-menu" id="menu-icon"></div>
            <nav class="navbar">
                <a href="index.php"><abbr title="Home"><i class="fa-solid fa-house"></i></abbr></a>
                <a href="about.php"><abbr title="About"><i class="fa-solid fa-address-card"></i></abbr></a>
                <a href=""><abbr title="Contant"><i class="fa-solid fa-address-book"></i></abbr></a>
                <a href=""><abbr title="pic"><i class="fa-solid fa-image"></i></abbr></a>
                <button class="login-button"> <a href="login.php"><i class="fa-solid fa-user"></i></a></button>
            </nav>
        </header>
        <div class="home">
        <div class="con">
            <h3>FITNESS</h3><br>
            <h2>TRAINING</h2><br>
            <h1>SKYGYM</h1><br>
        </div>

        <p>
            Are You <span> Ready To Change</span> Your <span id="span"> Body And health</span>
        </p>

        <p>
            <button class="btn"><a href="registrations.php">Registration!</a></button>
        </p>
    </div>
    </div>
</div>
    <div class="aboutUs">
        <img class="image" src="gym/about.jpg" alt="">

        <div class="about-text">
            <h1>10 Years Experience</h1>
            <p>SkyGym.com is amazing! Positively surprised by the efficiency <br> at responding and helping out!</p>
            <img src="/LearnPHP/gym/gym/u-1.png" alt="">
            <h2>Certified GYM Center</h2>
            <p>" Our overall experience with SkyGym.com is a breeze. We love how easy it is to integrate this website with our current workflow while providing great fitness programs for our customers and save us time in the process. "</p>
            
            <button class="btn"> <a href="about.php">Read More</a></button>


        </div>
    </div>
<?php 
include "footer.php";
?>
</body>
</html>