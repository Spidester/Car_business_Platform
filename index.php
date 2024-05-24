<?php
 session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SellAnyCar</title>

    <link rel="stylesheet" href="normal.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <div class="head">
        <nav class="navbar">
            <div class="logo" >
            <a href="index.html" target="_blank">  <img src="logo.png" width="50vw" style="padding-right: 2vw;" alt="">SellAnyCar</a>
            </div>
            
            <div class="menu">
                <ul>
                    
                    <li> <a href="index.php" class="active">Home</a></li>
                    <li> <a href="cards1.php" >BUY</a></li>
                    <?php

                        if(isset($_SESSION['fname']))
                        {          
                            echo "<li><a href='addacar.php'>Sell</a></li>";

                        }
                    ?>

                    <li> <a href="contactus.php" >ContactUs</a></li>
                    <li> <a href="aboutus.php" >About Us</a></li>
                </ul>
            </div>
            <div class="login_btn" id=loginbtn>

            
            <?php 
            if(isset($_SESSION['fname']))
            {          
                echo "<li><a href='logout.php'>Logout ".$_COOKIE['name']."</a></li>";

            }
            else
            {
                echo "<li><a href='login.php'>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                Login&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a></li>";
            }
            ?>
            </div>
        
        </nav>

        <div class="textss15">
            <h1> <i> Get your dream car at the best price</i></h1>
            <h2> <i> India's number ONE marketplace for cars</i></h2>
            
        </div>


        <div class="container76" style="padding: 100vh 0vw 0 0vw; display: flex;">
            
            <div class="image1" style="padding-left: 0vw;">
                <img src="usedcar1.jpg"  width="110%" alt="">
            </div>
            
            <span class="text2" style="font-size: 5vw; margin:10vh 0vw 0 5vw; font-weight: 800; color: #910000;" >
                <i> Choose From Wide Range Of Cars</i>
            </span>
        </div>
        
        <div class="backgroundimg">
                <img src="bgimg-removebg.png" style="padding: 30vh 10vw 0 14vw;" width=80% alt="djs">
        </div>


        <div class="footer" style="margin-top: 20vh;">
        
        <hr>
        <img src="logo.png" height=90vh; style="margin:10vh 0 0 45.3vw;"  alt="">
        <br>
        <br>
                
                <div class="logos"  style="display: flex; flex-direction: row; margin: 0 10vw 0 10vw; ">
                    <a href="https://www.instagram.com/atharvadalvi45/" target="blank" class="fa fa-instagram"  style=""></a>
                    <a href="https://www.facebook.com/profile.php?id=100015501967987" target="blank" class="fa fa-facebook" style=""></a>
                    <a href="https://twitter.com/hitman__45__" target="blank" class="fa fa-twitter" style=""></a>
                    <a href="https://www.snapchat.com/atharvadalvi45" target="blank" class="fa fa-snapchat-ghost" style=""></a>
                
                </div>
        <br>
        <br>
        <hr>
    
        </div>
    
        <span style="display: flex; font-weight:900; font-size: 2vw; padding: 0vw 0 0 42vw;">SellAnyCar &copy</span>
        </div>
    
        
    
    </body>
    </html>