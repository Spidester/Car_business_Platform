<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="normal.css">
    <style>
        
        @import url("https://fonts.googleapis.com/css2?family=Poppins&display=swap");
      *{
        margin: 0;
        padding: 0;
      }  
      
      pre{
        
        font-weight:800;
        font-size:1vw;
      }
    </style>
    
    
  </head>
  <body>

  <div class="head" style="height:110vh;">
        <nav class="navbar">
            <div class="logo" >
            <a href="index.html" target="_blank">  <img src="logo.png" width="50vw" style="padding-right: 2vw;" alt="">SellAnyCar</a>
            </div>
            
            <div class="menu">
                <ul>
                    
                    <li> <a href="index.php">Home</a></li>
                    <li> <a href="cards1.php" class="active">BUY</a></li>
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
    


  <?php
      $server = "localhost";
      $username = "root";
      $password = "";
      $database = "test";
        
      $conn = mysqli_connect($server, $username, $password, $database);
        // Create connection
      $conn = new mysqli($server, $username, $password, $database);
  ?>
    
    <div class="container" style="display: flex; ">

      <div class="left" style="width: 55vw; height: 70vh; margin:20vh 0 0 2vw;background-color: black; display: flex; align-items: center; justify-content: center; ">
      <?php
        $id=$_GET['pid'];
        $sql="SELECT * FROM addcar where id='$id'";
        $rs=mysqli_query($conn,$sql);
        $row=mysqli_fetch_array($rs);
      ?>
      
      <img src="<?php echo $row['image'] ?>" height="70%"; alt="">
    </div>


      <div class="right" style="margin: 10vw 0vw 0 10vw;">
      <pre>CarName             : <?php echo $row['Carbrand']?> <?php echo $row['Carname']?></pre>  
      <br>
      <pre>Registration Number : <?php echo $row['Reg_no']?></pre>
      <br>
      <pre>Year                : <?php echo $row['Year1']?></p>
      <pre>Driven              : <?php echo $row['Kms']?></pre>
      <pre>Transmission        : <?php echo $row['Trans']?></pre>
      <pre>Number of owners    : <?php echo $row['Ownerno']?></pre>
      <pre>Location            : <?php echo $row['location']?></pre>
      <pre>Name of Owner       : <?php echo $row['name']?></pre>
      <pre>Contact Number      : <?php echo $row['phone']?></pre>

      </div>
    </div>
          </div>
  </body>
</html>