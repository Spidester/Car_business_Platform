<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Sell
    </title>

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins&display=swap");
        *{
            margin: 0;
            padding: 0%;
            font-family: "Poppins", sans-serif;
        }

        ::placeholder
        {
            font-size: 2.5vh;
            font-weight: bold;
            color: rgba(255, 0, 0, 0.458);


        }

        .slider {
        -webkit-appearance: none;
        width: 25vw;
        height: 2.5vh;
        border: 0.3vw solid black;
        border-radius: 1vw;
        background: rgba(222, 237, 245, 0.53);
        outline: none;
        opacity: 0.7;
        -webkit-transition: .2s;
        transition: opacity .2s;
        }

        .slider::-webkit-slider-thumb {
        -webkit-appearance: none;
        appearance: none;
        width: 2vw;
        height: 25px;
        border-radius: 50%; 
        background: #04AA6D;
        cursor: pointer;
        }

        .slider::-moz-range-thumb {
        width: 2vw;
        height: 1.5vw;
        border: 0.4vw solid;
        border-color: rgb(0, 123, 255);
        background: #04AA6D;
        cursor: pointer;
        }

        .fa-instagram {
        background: #ba2c0c;
        color: white;
        }
        .fa-facebook {
        background: #3B5998;
        color: white;
        }

        .fa-twitter {
        background: #55ACEE;
        color: white;
        }

        .fa-snapchat-ghost {
        background: #fffc00;
        color: white;
        text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
        }

        .fa:hover {
            opacity: 0.7;
        }

        .fa {
            padding: 1.5vw;
            width: 5vw;
            text-align: center;
            text-decoration: none;
            margin: 0.5vw ;
            margin-left: 8.8vw;
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
                    
                    <li> <a href="index.php">Home</a></li>
                    <li> <a href="cards1.php" >BUY</a></li>
                    <?php

                        if(isset($_SESSION['fname']))
                        {          
                            echo "<li><a href='addacar.php' class='active'>Sell</a></li>";

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


<div class="containerpre" style="padding-top:25vh; height: 400vh;">

    <div class="container" >

        <p style="font-size: 5vh; text-align: center; ">ADD CAR DETAILS</p>
        
        <div class="container_1" style="width: 70vw; height: 200vh;
        background-color: rgb(255, 255, 255); margin: 10vh 0vw 0vh 15vw; border: 0.15vw solid rgb(197, 194, 194); 
        border-radius: 1.5vw;">
        

            <form action="cards.php"  method="post" name="addcar" enctype="multipart/form-data">

                <div class="carbrand_carname" style="display: flex; flex-direction: row;">

                    <div class="carbrand">
                        <div class="carbrand-text" style="margin: 15vh 0 0 5.5vw; ">
                            <span
                                style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
                                 font-size:3.9vh; color:rgb(0, 107, 168);">
                                Car Brand
                            </span>
                        </div>

                        <div class="carbrand-input" style="margin:2vh 0 0 5.5vw;">
                            <input type="text" name="CarBrand"
                                style="width:20vw; height: 7vh;border: 0.3vh solid rgb(180, 176, 176); font-size: 2.5vh;  color:rgba(255, 0, 0, 0.523); font-weight: bolder;
                                border-radius: 0.7vw;padding-left:1vw; background-color: rgba(222, 237, 245, 0.583)" required
                                placeholder="Volkswagen" >
                        </div>
                    </div>

                    <div class="carname">
                        <div class="carname-text" style="margin: 15vh 0 0 15vw; ">
                            <span
                                style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', 
                                sans-serif; font-size:3.9vh; color:rgb(0, 107, 168);">
                                Car Name
                            </span>
                        </div>

                        <div class="carname-input" style="margin:2vh 0 0 15vw;">
                            <input type="text" name="CarName"
                                style="width:20vw; height: 7vh;border: 0.3vh solid rgb(180, 176, 176); font-size: 2.5vh;  color:rgba(255, 0, 0, 0.523); font-weight: bolder; 
                                border-radius: 0.7vw;padding-left:1vw; background-color: rgba(222, 237, 245, 0.583)" required
                                placeholder="Polo" >
                        </div>
                    </div>

                    
                </div>

                <div class="year_fuel" style="display: flex; flex-direction: row;">

                    <div class="year_fuel1">
                        <div class="year-text" style="margin: 15vh 0 0 5.5vw; ">
                            <span
                                style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
                                 font-size:3.9vh; color:rgb(0, 107, 168);">
                                Year
                            </span>
                        </div>

                        <div class="year-input" style="margin:2vh 0 0 5.5vw;">
                            <select name="Year" id="Year" required style="width: 21.5vw; height: 7.5vh;
                            border: 0.3vh solid rgb(180, 176, 176); border-radius: 0.7vw; 
                            background-color: rgba(222, 237, 245, 0.583); color:rgba(255, 0, 0, 0.458); 
                            font-weight: bold; padding-left: 0.5vw; font-size: 2.3vh; cursor:pointer;">
                                
                                <option value="" disabled selected hidden style="background-color: rgba(222, 237, 245, 0.53); font-size: 2.2vh; font-weight: 200; color: black; ">Select Year</option>
                                
                                <option value="2009" style="background-color: rgba(222, 237, 245, 0.53); font-size: 2.2vh; font-weight: 200; color: black; ">2009</option>
                                <option value="2010" style="background-color: rgba(128, 126, 126, 0.139); font-size: 2.2vh; color: black; font-weight: 200;">2010</option>
                                <option value="2011" style="background-color: rgba(222, 237, 245, 0.53); font-size: 2.2vh; font-weight: 200; color: black; ">2011</option>
                                <option value="2012" style="background-color: rgba(128, 126, 126, 0.139); font-size: 2.2vh; color: black; font-weight: 200;">2012</option>
                                <option value="2013" style="background-color: rgba(222, 237, 245, 0.53); font-size: 2.2vh; font-weight: 200; color: black; ">2013</option>
                                <option value="2014" style="background-color: rgba(128, 126, 126, 0.139); font-size: 2.2vh; color: black; font-weight: 200;">2014</option>
                                <option value="2015" style="background-color: rgba(222, 237, 245, 0.53); font-size: 2.2vh; font-weight: 200; color: black; ">2015</option>
                                <option value="2016" style="background-color: rgba(128, 126, 126, 0.139); font-size: 2.2vh; color: black; font-weight: 200;">2016</option>
                                <option value="2017" style="background-color: rgba(222, 237, 245, 0.53); font-size: 2.2vh; font-weight: 200; color: black; ">2017</option>
                                <option value="2018" style="background-color: rgba(128, 126, 126, 0.139); font-size: 2.2vh; color: black; font-weight: 200;">2018</option>
                                <option value="2019" style="background-color: rgba(222, 237, 245, 0.53); font-size: 2.2vh; font-weight: 200; color: black; ">2019</option>
                                <option value="2020" style="background-color: rgba(128, 126, 126, 0.139); font-size: 2.2vh; color: black; font-weight: 200;">2020</option>
                                <option value="2021" style="background-color: rgba(222, 237, 245, 0.53); font-size: 2.2vh; font-weight: 200; color: black; ">2021</option>
                                
                            </select>
                            

                        </div>
                    </div>

                    <div class="fuel">
                        <div class="fuel-text" style="margin: 15vh 0 0 15vw; ">
                            <span
                                style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', 
                                sans-serif; font-size:3.9vh; color:rgb(0, 107, 168);">
                                Fuel
                            </span>
                        </div>

                        <div class="fueltype-input" style="margin:2vh 0 0 15vw;">
                            <select name="Fuel" id="Fuel" required style="width: 21.5vw; height: 7.5vh;
                            border: 0.3vh solid rgb(180, 176, 176); border-radius: 0.7vw; 
                            background-color: rgba(222, 237, 245, 0.583); padding-left: 0.6vw; 
                            color:rgba(255, 0, 0, 0.458); font-weight: bold; padding-left: 0.5vw; 
                            font-size: 2.3vh; cursor:pointer;">

                                <option value="" disabled selected hidden style="background-color: rgba(128, 126, 126, 0.139); font-size: 2.2vh; color: rgba(171, 28, 28, 0.858);">Select Fuel Type</option>
                                <option value="Petrol" style="background-color: rgba(222, 237, 245, 0.53); font-size: 2.2vh; color: black; font-weight: 200; "> PETROL</option>
                                <option value="Diesel" style="background-color: rgba(128, 126, 126, 0.139); font-size: 2.2vh; color: black; font-weight: 200;">DIESEL</option>
                                <option value="CNG"  style="background-color: rgba(222, 237, 245, 0.53); color: black; font-weight: 200;">PETROL+CNG</option>
                                <option value="Electric" style="background-color: rgba(128, 126, 126, 0.139); font-size: 2.2vh; color: black; font-weight: 200;">ELECTRIC</option>
                                <option value="Hybrid"  style="background-color: rgba(222, 237, 245, 0.53); color: black;font-weight: 200;">HYBRID</option>
                
                            </select>
                            

                        </div>
                    </div>   
                </div>

                <div class="trans_owners" style="display: flex; flex-direction: row;">

                    <div class="trans_kms1">
                        <div class="trans-text" style="margin: 15vh 0 0 5.5vw; ">
                            <span
                                style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
                                 font-size:4.0vh; color:rgb(0, 107, 168);">
                                Transmission
                            </span>
                        </div>

                        <div class="trans-input" style="margin:5vh 0 0 5.5vw;">

                            
                            <input type="radio" id="trans_manu" name="trans" checked value="Manual"; style="width: 3vw; height: 3vh; cursor: pointer;"  >
                            <label for="trans_manu" style="font-size: 3.4vh; cursor: pointer;">Manual</label>
                            <input type="radio" id="trans_auto" name="trans" value="Automatic"  style="width: 3vw; height: 3vh;cursor: pointer;" >
                            <label for="trans_auto" style="font-size: 3.4vh; cursor: pointer;">Automatic </label>
                        
                        </div>
                    </div>

                    <div class="owner">
                        <div class="owner-text" style="margin: 15vh 0 0 15.2vw; ">
                            <span
                                style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', 
                                sans-serif; font-size:4.0vh; color:rgb(0, 107, 168);">
                                No Of Owner
                            </span>
                        </div>

                        <div class="no-owners" style="margin:5vh 0 0 15vw;">

                            
                            <input type="radio" id="1stowner" name="noofowners" value="1"; checked style="cursor: pointer;width: 3vw; height: 3vh;" >
                            <label for="1stowner" style="font-size: 3.4vh;cursor: pointer;">1st</label>
                            <input type="radio" id="2ndowner" name="noofowners" value="2"  style="cursor: pointer;width: 3vw; height: 3vh;" >
                            <label for="2ndowner" style="font-size: 3.4vh;cursor: pointer;">2nd</label>
                            <input type="radio" id="3rdowner" name="noofowners" value="3"  style="cursor: pointer;width: 3vw; height: 3vh;" >
                            <label for="3rdowner" style="font-size: 3.4vh;cursor: pointer;">3rd</label>
                        
                        </div>
                    </div>   
                </div>

                <div class="kms_reg" style="display: flex; flex-direction: row;">

                    <div class="kms_reg1">
                        <div class="driven-text" style="margin: 15vh 0 0 5.5vw; ">
                            <span
                                style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
                                 font-size:3.9vh; color:rgb(0, 107, 168);">
                                Driven
                            </span>
                        </div>


                        
                        <div class="slidecontainer" style="margin:5vh 0 0 5.5vw;">
                            <input type="range"  name="kms" min="1000" max="150000" value="10000" class="slider" id="myRange" required>
                            <p style="font-size: 2.9vh; padding-top: 1vh;"><span id="demo"></span></p>
                        </div>
                        
                    </div>  
                    <script>
                        var slider = document.getElementById("myRange");
                        var output = document.getElementById("demo");
                        output.innerHTML = slider.value;
                        
                        slider.oninput = function() {
                          output.innerHTML = this.value+ " kms";
                        }
                    </script>



                    <div class="reg_no">
                        <div class="reg_no-text" style="margin: 15vh 0 0 11.2vw; ">
                            <span
                                style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
                                font-size:3.9vh; color:rgb(0, 107, 168);">
                                Registration Number
                            </span>
                        </div>

                        <div class="reg_no-input" style="margin:2vh 0 0 11.2vw;">
                            <input type="text" name="reg_no"
                                style="width:20vw; height: 7vh;border: 0.3vh solid rgb(180, 176, 176); color:rgba(255, 0, 0, 0.523); font-weight: bolder;
                                border-radius: 0.7vw;padding-left:1vw; background-color: rgba(222, 237, 245, 0.583); font-size: 2.5vh;" required 
                                placeholder="MH01AA1234" >
                        </div>
                    </div>
                </div>

                <div class="price">

                    <div class="price1">
                        <div class="price-text" style="margin: 15vh 0 0 5.5vw; ">
                            <span
                                style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
                                font-size:3.9vh; color:rgb(0, 107, 168);">
                                Price
                            </span>
                        </div>

                        <div class="price-input" style="margin:2vh 0 0 5.5vw;">
                            <input type="price" name="price"
                                style="width:20vw; height: 7vh;border: 0.3vh solid rgb(180, 176, 176); color:rgba(255, 0, 0, 0.523); font-weight: bolder;
                                border-radius: 0.7vw;padding-left:1vw; background-color: rgba(222, 237, 245, 0.583); font-size: 2.5vh;" required 
                                placeholder="in Rupees" >
                        </div>
                    </div>

                </div>
                
                <div class="fileupload">
                        <div class="file-text" style="margin: 15vh 0 0 5.5vw; ">
                            <span
                                style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
                                 font-size:3.9vh; color:rgb(0, 107, 168);">
                                Upload Images
                            </span>
                        </div>

                        <div class="fileinput" style="margin:5vh 0 0 5.5vw;">
                            <input type="file" name='my_image' id="my_file">
                        </div>
                </div> 
                <button type="submit" name=submit class="button" 
                style="width: 7vw; height:7vh; margin: 10vh 5.5vw; font-size: 2vh;">Submit</button>
            </form>
        </div>
    </div>
</div>
   

<div class="footer" style="margin-top: 0vh;">
        
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