<?php
include "access.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="homecss.css">
    <style>
        .dbtable {
            padding-top: 200px;
        }
    </style>
    <title>SkyGym</title>
</head>

<body class="bd">
    <div class="containet">
        <video autoplay loop muted plays-inline class="bg-clip">
            <source src="gym\beach.mp4" type="video/mp4">
        </video>
        <?php
        include "nav.php";
        ?>
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
                <a href="price.php"><button class="btn">Plan</button>
                </a>
            </p>
        </div>
    </div>
    <!-- </div> -->
    <div class="aboutUs">
        <img class="image" src="gym/about.jpg" alt="">

        <div class="about-text">
            <h1>10 Years Experience</h1>
            <p>SkyGym.com is amazing! Positively surprised by the efficiency <br> at responding and helping out!</p>
            <img src="gym/u-1.png" alt="">
            <h2>Certified GYM Center</h2>
            <p>" Our overall experience with SkyGym.com is a breeze. We love how easy it is to integrate this website with our current workflow while providing great fitness programs for our customers and save us time in the process. "</p>

            <button class="btn"> <a href="about.php">Read More</a></button>
<marquee behavior="" direction=""></marquee>

        </div>
    </div>

    <div class="team">
        <h1>
            Our Trainers
        </h1>
        <p>“Working with SkyGym.com and their team has been <br> an amazing experience and a dream come true in terms of accomplishing a vision!”</p>
    </div>
    <div class="mid">


        <div class="frame">
            <div class="card">
                <img src="gym/t1.jpg" alt="">
                <p>Radadiya Avadh</p>
                <span id="snap">Supervisor</span>
            </div>
        </div>
        <div class="frame">
            <div class="card">
                <img src="gym/t2.jpg" alt="">
                <p>Jena Linda</p>
                <span id="snap">Supervisor</span>
            </div>
        </div>

        <div class="frame">
            <div class="card">
                <img src="gym/t3.jpg" alt="">
                <p>Anal Menshilon</p>
                <span id="snap">Supervisor</span>
            </div>
        </div>

    </div>
    <div class="more">

        <button class="btn"> <a href="trainer.php">View More</a></button>
    </div>
    <?php
    include "footer.php"
    ?>
</body>

</html>