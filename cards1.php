<?php
    session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewpoint" content="with=device-width , initial-scale = 1.0">
    <link rel="stylesheet" href="normal.css">

    <style>
        .image {
        opacity: 1;
        display: block;
        width: 100%;
        height:40vh;
        transition: .5s ease;
        backface-visibility: hidden;
        }
        
        
        .middle {
        transition: .5s ease;
        opacity: 0;
        position: absolute;
        top: 30%;
        left: 50%;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        text-align: center;
        }

        
        .container:hover .image {
        opacity: 0.3;
        }

        .container:hover .middle {
        opacity: 1;
        }

        .text {
        background-color: #04AA6D;
        color: white;
        font-size: 16px;
        padding: 16px 32px;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
</head>

<body>
<div class="head">
        <nav class="navbar">
            <div class="logo" >
            <a href="index.html" target="_blank">  <img src="logo.png" width="50vw" style="padding-right: 2vw;" alt="">SellAnyCar</a>
            </div>
            
            <div class="menu">
                <ul>
                    
                    <li> <a href="index.php" >Home</a></li>
                    <li> <a href="cards1.php" class="active">BUY</a></li>
                    <?php

                        if(isset($_SESSION['fname']))
                        {          
                            echo "<li><a href='addacar.php'>Sell</a></li>";

                        }
                    ?>

                    <li> <a href="contactus.php" >ContactUs</a></li>
                    <li> <a href="Aboutus.php" >About Us</a></li>
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


    <h1 style="margin:5vw 0px 90px 45vw">SellAnyCar</h1>



<div class="margin" style="margin: 10px;">
    <div class="row row-cols-1 row-cols-md-3 g-4">              
        <?php
            $server = "localhost";
            $username = "root";
            $password = "";
            $database = "test";

            $conn = mysqli_connect($server, $username, $password, $database);
            $conn = new mysqli($server, $username, $password, $database);
                    $displayquery="SELECT * FROM addcar ORDER BY id DESC";
                    $querydisplay = mysqli_query($conn,$displayquery);

                    if (mysqli_num_rows($querydisplay) > 0) 
                    {
                        while ($result = mysqli_fetch_array($querydisplay))
                        {
                        ?>
                                   <div class="col">
                                    <a href="individual.php?pid=<?php echo $result['id']; ?>" style="text-decoration:none; color:black;">
            
                                    <div class="card" >
                                        <div class="container">
                                            <img src="<?php echo $result['image']?>" class="image" class="card-img-top" alt="...">
                                            <div class="middle">
                                                <div class="text4">BUY
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title"><?=$result['Carbrand']?> <b><?= $result['Carname']?> </b> Price <b><?="Rs",$result['price']?></b></h5>
                                            <p class="card-text"><b> Fuel:</b><?= $result['Fuel']?><b> Kms:</b><?=$result['Kms']?>kms <b>Year:</b><?=$result['Year1']?></p>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                                <?php
                        }
                    } 
                    ?>
</div>
        </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>