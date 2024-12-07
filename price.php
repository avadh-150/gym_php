<?php
include "access.php"; ?>
<!doctype html>
<html lang="en">

<head>
  <title>girly FITNESS CLUB</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800" rel="stylesheet">

  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/animate.css">

  <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">

  <link rel="stylesheet" href="plan.css">
</head>

<body>


  </head>
  <body>
  <?php 
    
    include "paymsg.php"
    ?>
    <!-- Main Content -->
    <main class="blog">

      <section class="pricing-section spad">
        <div class="containers_main">
          <div class="section-title text-center">
            <img src="img/icons/logo-icon.png" alt="">
            <h2>Pricing plans</h2>
            <p>Practice Yoga to perfect physical beauty, take care of your soul and enjoy life more fully!</p>
          </div>
          <div class="row_main">
            <?php
            include "config.php";
            $sql = "SELECT * from tbladdpackage";
            $results = mysqli_query($conn, $sql);


            $cnt = 1; {
              while ($result = mysqli_fetch_assoc($results)) {
            ?>
            
                <div class="blog-posts">
                  <div class="blog-post">
                    <div class="pi-top">
                      <h4><?php echo $result['titlename']; ?></h4>
                    </div>
                    <div class="pi-price">
                      <h3>₹<?php echo $result['Price']; ?></h3>
                      <p> <?php echo $result['month']; ?></p>
                    </div>
                    <ul>
                     <li>

                       <?php echo $result['Description']; ?>
                     </li>
                    </ul>
                    <?php if (!isset($_SESSION['username'])): ?>
                      <a href="login.php" class="site-btn sb-line-gradient">Booking Now</a>
                      <?php else : ?>
                        <!-- <a href="#" class="site-btn sb-line-gradient">Booking Now</a> -->
                        <form method='post' action="price.php">
                          <input type='hidden' name='pid' value='<?php echo $result['id']; ?>'>
                          
                          <a href="payment.php?id=<?php echo $result['id'];?>" class="site-btn sb-line-gradient" onclick="return confirm('Payment Success..');">Booking Now</a>

                          <!-- <input class='site-btn sb-line-gradient' name="sub_plan" type='submit' value='Booking Now' onclick="return confirm('Payment Success..');"> -->
           
                      </form>
                    <?php endif; ?>
                  </div>
                </div>
            <?php $cnt = $cnt + 1;
              }
            } ?>
          </div>
        </div>
      </section>

      <!-- Add more blog posts as needed -->
      </div>
    </main>


    <?php
       // include "footer.php";
        ?>
  
      </body>

</html>
<?php

if(isset($_REQUEST['sub_plan']))
{
  header("location:payment.php");
}
else{
  echo "Something is wrong 404";
}
?>