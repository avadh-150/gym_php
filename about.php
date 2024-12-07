<?php  
include "access.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="homecss.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>

<body>

    <body class="bd">
    <?php
            include "nav.php";
?>        
        <section class="bet-about">

            <h1>About Us</h1>

        </section>
        <div class="aboutUs">
            <img class="image" src="gym/about.jpg" alt="">

            <div class="about-text">
                <h1>10 Years Experience</h1>
                <p>SkyGym.com is amazing! Positively surprised by the efficiency <br> at responding and helping out!</p>
                <img src="gym/u-1.png" alt="">
                <h2>Certified GYM Center</h2>
                <p>" Our overall experience with SkyGym.com is a breeze. We love how easy it is to integrate this website with our current workflow while providing great fitness programs for our customers and save us time in the process. "</p>

                <button class="btn">Read More</button>


            </div>
        </div>
        <div class="team">
            <h1>
                Our Team
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
        
        
        <?php
        include "footer.php";
        ?>
    </body>

</html>