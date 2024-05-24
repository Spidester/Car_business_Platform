<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="normal.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Login</title>

    <style>
        
        @import url("https://fonts.googleapis.com/css2?family=Poppins&display=swap");

        
            * {
                margin: 0;
                padding: 0;
                font-family: "Poppins", sans-serif;
                
            }
            
            .loginpage {
                padding: 9vh 34vw 9vh 35vw;
                /* background: #e5e5e5; */
                
                background-image: linear-gradient(180deg, #ded4d4 0%, #6284FF 50%, #f47070 100%);
                /* background-color: rgba(0, 89, 141, 0.096); */
  /* background-color: #d8d2d2; */
                height: 82vh;
            }

            .container {
                /* margin: 9vh auto; */
                /*width: 25rem;                height: 30rem; */
                width: 29vw;
                height: 86vh;
                border-radius: 10px;
                border: 0.125rem solid rgb(100, 100, 222);
                background-color: rgb(170, 170, 170);

            }
            .button {
                border: none;
                /* color: rgb(0, 107, 168); */
                text-align: center;
                background-color:rgba(0, 89, 141, 0.699);
                text-decoration: none;
                display: inline-block;
                transition-duration: 0.4s;
                cursor: pointer;
                border-radius: 30px;
            }
            .button:hover {
                background-color: #4CAF50;
                color: white;
            }

        
    </style>
</head>

<body>
<div class="head" style="height: 115vh;">
        <nav class="navbar">
            <div class="logo" >
            <a href="index.html" target="_blank">  <img src="logo.png" width="50vw" style="padding-right: 2vw;" alt="">SellAnyCar</a>
            </div>
            
            <div class="menu">
                <ul>
                    
                    <li> <a href="index.php">Home</a></li>
                    <li> <a href="cards1.php" >BUY</a></li>
                    <?php

                        if(isset($_SESSION['fname']))
                        {          
                            echo "<li><a href='addacar.php'>Sell</a></li>";

                        }
                    ?>

                    <li> <a href="contactus.php" >ContactUs</a></li>
                    <li> <a href="aboutus.php">About Us</a></li>
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

    if(isset($_POST['submit']))
    {
        $email = $_POST['email'];
        $password= $_POST['password'];
        
        $email_search="select * from signup where email='$email'";
        $query=mysqli_query($conn,$email_search);
        
        $email_count= mysqli_num_rows($query);

        if($email_count)
        {
            $email_pass= mysqli_fetch_assoc($query);
            $db_pass=$email_pass['password'];
            
            $pass_decode = password_verify($password, $db_pass);

            if($pass_decode)
            {

                $_SESSION['fname']=$email_pass['Firstname'];
                $_SESSION['lname']=$email_pass['lastname'];
                $_SESSION['location']=$email_pass['location'];
                $_SESSION['number']=$email_pass['phone'];
                $fname1=$_SESSION['fname'];
                setcookie('name',$fname1, time()+60*60*30*24);
                ?>
                <script>
                    
                    alert("Login Successful");
                    setTimeout(myFunction, 3000);

                    function myFunction()
                    {
                        alert("Login Successful")
                    }
                    
                    </script>
                <?php
                header('location:index.php');
            }
            else
            {
                ?>
                <script>
                    alert ("invalid password");
                    setTimeout(myFunction, 3000);
                    location.replace("login.php");

                </script>
                <?php
                
            }
        }
        else {
            ?>
                <script>
                    alert ("invalid email");
                    setTimeout(myFunction, 3000);
                    location.replace("loginthapa.php");

                </script>
            <?php
        }
    }

?>
    <div class="loginpage">
        <div class="container">

            <p style="margin: 4% 10% 0% 7%; font-size:4vw; color:rgb(0, 107, 168);">BidYourCars</p>
            <!-- <p style="margin:4% 10% 0% 7%;">Sell Your car at the right price</p> -->
            <form name="myform" action="" method="POST">

                <p div="login-text"
                    style="padding: 3vh 4vh; font-size: 5vh;">
                    Login</p>

                <div class="emailid-text" style="margin: 2vh 0 0 1.9vw; ">
                    <span
                        style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:3.9vh; color:rgb(0, 107, 168);">
                        Email
                    </span>
                </div>

                <div class="emailid-input" style="margin:1vh 0 0 1.9vw;">
                    <input type="email" name="email"
                        style="width:90%; height: 7vh;border: 1px solid white;  border-radius: 0.7rem;padding-left:1.5%;"
                        placeholder="email@mail.com" >
                </div>

                <div class="password-text" style="margin: 5vh 0 0 1.9vw;">
                    <span
                        style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size: 3.9vh; color:rgb(0, 107, 168);">
                        Password
                    </span>

                </div>

                <div class="password-input" style="margin:1vh 0 0 1.9vw;">
                    <input type="password" name="password"
                        style="width:90%; height: 7vh; border: 1px solid white;  border-radius: 0.7rem; padding-left:1.5%;"
                        placeholder="6-20(a-z,A-Z,1-9)">
                </div>

                <p style="font-size: 1vw; padding-left: 2vw;">dont have an account? SignUp <a href="signup.php">here</a></p>
                <!-- <button type="submit" style="width: 15%; height:4vh; margin: 1.9vw; font-size: 2vh; background-color: rgb(0, 107, 168); color: azure;">Submit</button> -->
                <button type="submit" name=submit class="button" style="width: 7vw; height:7vh; margin: 7vh 1.9vw; font-size: 2vh;" onclick="return validate()">LogIn</button>
            </form>

        </div>
    </div>
</body>


</html>