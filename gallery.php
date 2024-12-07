<?php
include "access.php";
?>
<!DOCTYPE html>
<html>

<head>
    <title>Photo Gallery</title>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!-- <link rel="stylesheet" href="homecss.css">-->
    <link rel="stylesheet" href="styles.css"> 
    <style>
        body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
}

.caption {
    text-align: center;
    padding: 20px;
}

.textline {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    padding: 20px;
}

.photo {
    width: 24%; /* 4 columns */
    margin: 1%; /* Spacing between images */
    box-sizing: border-box; /* Include padding in width/height */
}

.con {
    overflow: hidden; /* Ensure images are contained */
}

.m1 {
    width: 100%; /* Make the image responsive */
    height: auto; /* Maintain aspect ratio */
    display: block; /* Remove bottom space */
}

/* Optional: Add some hover effect */
/* .photo:hover {
    transform: scale(1.05);
    transition: transform 0.3s ease;
} */

    </style>
</head>

<body class="bd">
    <?php
    include "nav.php";
    ?>
    <section class="caption">
        <h1>Photo Gallery</h1>
        <p>Lorem eltempora sed eligendi rerum asperiores debitis reiciendis laboriosam officiis nesciunt, atque perferendis cumque?</p>
    </section>
    <section class="textline" id="photos">
        <?php
    include "config.php";
    $sql = "select * from gallery";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        
        ?>
        <div class="photo">
            <div class="con">
        
                    <img src="gym/<?php echo $row['pic'] ?>" alt="" class="m1">
                </div>
            </div>
            <?php } ?>
            <section>

            <!-- <img src="gym/2.jpg" alt="" class="m2">
                <img src="gym/3.jpg" alt="">
                <img src="gym/4.jpg" alt="" class="m1">
                <img src="gym/5.jpg" alt="" class="m2">
                <img src="gym/6.jpg" alt="">
                <img src="gym/7.jpg" alt="" class="m1">
                <img src="gym/8.jpg" alt="" class="m2">
                <img src="gym/9.jpg" alt="">
                <img src="gym/10.jpg" alt="" class="m1">
                <img src="gym/11.jpg" alt="" class="m2">
                <img src="gym/12.jpg" alt="">
                <img src="gym/13.jpg" alt="" class="m1">
                <img src="gym/t2.jpg" alt="" class="m2">
                <img src="gym/15.jpg" alt="">
                <img src="gym/t6.jpg" alt="" class="m1">
                <img src="gym/t1.jpg" alt="" class="m2">
                <img src="gym/18.jpg" alt="">
                <img src="gym/19.jpg" alt="" class="m1">
                <img src="gym/20.jpg" alt="" class="m2">
                <img src="gym/21.jpeg" alt="" class="m1">
                <img src="gym/22.jpg" alt="" class="m2">
                <img src="gym/23.jpg" alt="">
                <img src="gym/24.jpg" alt="" class="m1">
                <img src="gym/25.jpg" alt="" class="m2">
                <img src="gym/26.jpg" alt="">
                <img src="gym/27.jpg" alt="">
                <img src="gym/28.jpg" alt="" class="m1">
                <img src="gym/29.jpg" alt="" class="m2">
                <img src="gym/30.jpg" alt="">
                <img src="gym/blog-1.jpg" alt="">
                <img src="gym/blog-2.jpg" alt="">
                <img src="gym/t3.jpg" alt="">
 -->

</body>

</html>