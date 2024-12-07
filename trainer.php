<center?php
    include "access.php" ;
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
        <link rel="stylesheet" href="styles.css">

        <title>Document</title>
<style>
 

h2 {
    font-size: 24px; /* Heading size */
    margin-bottom: 15px; /* Space below the heading */
    color: #333; /* Dark text color */
}

form {
    display: flex; /* Flexbox for alignment */
    justify-content: center; /* Center form items */
    gap: 10px; /* Space between inputs and button */
    margin-left:-470px;
}

input[type="search"] {
    padding: 20px; /* Inner space */
    border: 1px solid #ccc; /* Border */
    border-radius: 4px; /* Rounded corners */
    font-size: 16px; /* Font size */
    width: 200px; /* Fixed width */
}

button {
    padding: 10px 15px; /* Inner space */
    background-color: #0056b3; /* Button color */
    color: white; /* Text color */
    border: 1px solid #fff; 
    margin-top:50px;
    /* No border */
    border-radius: 4px; /* Rounded corners */
    cursor: pointer; /* Pointer on hover */
    /* transition: background-color 0.3s; Transition effect */
}



</style>
    </head>

    <body class="bd">
    <section class="bet-about">
        <div class="box">
            <h2>Our Trainers</h2>
            <form action="" method="GET">
                <input type="search" placeholder="Search Trainer" name="search" id="srh" value="<?php echo isset($_GET['search']) ? htmlspecialchars($_GET['search']) : ''; ?>">
                <button type="submit">Search</button>
            </form>
        </div>
    </section>
        <?php
        include "config.php";
        $search_query = '';
    if (isset($_GET['search'])) {
        $search_query = mysqli_real_escape_string($conn, $_GET['search']);
        // Modify the query to search by Tname
        $sql = "SELECT * FROM trainer WHERE Tname LIKE '$search_query%'";
    } else {
        // Default query to display all trainers
        $sql = "SELECT * FROM trainer";
    }

    $result = mysqli_query($conn, $sql) or die("Query failed");

    // Check if any results were found
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
    ?>
    
                <div class="container">
                    <div class="cad">
                        <center>
                            <div class="imag">
                                <img src="gym/<?php echo $row['image']; ?>" alt="">
                            </div>
                        </center>

                        <h2><?php echo $row['Tname']; ?></h2>
                        <p><?php echo $row['Tgroup']; ?></p>
                        <p>Phone No: <?php echo $row['contact']; ?></p>
                        <p><?php echo $row['contain']; ?></p>
                        <div class="icons">
                            <i class="fa-brands fa-facebook"></i>
                            <i class="fa-brands fa-twitter"></i>
                            <i class="fa-brands fa-whatsapp"></i>
                            <i class="fa-brands fa-pinterest"></i>
                        </div>
                    </div>
                </div>
                <?php
        }
    } else {
        // If no trainers found
        echo "<p>No trainers found matching your search.</p>";
    }
    ?>
      
    </body>

    </html>