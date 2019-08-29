<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keyword" content="techno,technology,rise,letsrise">
    <meta name="description" content="we provide free and upto date knowledge on the computer languages">
    <title>LetsRise</title>
    <link rel ="icon" type="image/png" href="img/favicon.png">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<header>
    <div class="container">
        <div id="branding">
            <a href="index.php"><h1><span class="highlight">Lets</span> Rise</h1></a>
        </div>
        <div>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="game/Entertainment.php">Entertainment</a></li>
                    <?php
                    if(isset($_SESSION['uid'])){
                        echo '<li><a href="services.php">Courses</a></li>
                               <li><a href="includes/signout.inc.php">Sign-Out</a></li>';
                    }
                    else{
                        echo '<li><a href="services.php">Services</a></li>
                              <li><a href="register.php">Register</a></li>
                              <li><a href="signin.php">Sign-In</a></li>';
                    }
                    ?>
                </ul>
            </nav>
        </div>
    </div>
</header>
</body></html>