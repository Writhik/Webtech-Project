<?php
session_start();
if(isset($_SESSION['email']))
{
    $email=$_SESSION['email'];		
}	

?>
<!DOCTYPE html>
<html>
<head>
<title>Home</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link href="img/car.png" rel="icon" type="img/icon">
</head>
<style>
p{
    text-align: right;
    }
</style>
<body>
    <div id="full">
        <div id="header"> <div id="logo">
            <h1><font color="Red">Luxury Cars</font></h1>
        </div>

        <div id="nav">
            <ul>
                <li><a href="contact.php">Contact Us</a></li> 
                <li><a href="about.php">About Us</a></li>
                <li><a href="reg.php">Register</a></li> 
                <?php
        if (isset($_SESSION['email'])) {
            echo '<li><a href="logout.php"><p>Logout</p></a></li>';
        } else {
            echo '<li><a href="login.php">Login</a></li>';
        }
        ?>
            </ul>
        </div>
        <div>
            <video id="background-video" autoplay loop muted>
            <source src="img/Intro.mp4" type="video/mp4">
            </video>
        </div>
    
        <div id ="welcome">
            <center>
                <h1 style="color: red;">Welcome</h1>
                <h3>We provide you used and new cars for you. You can buy it without any hesitation. we also provide you services and consultation about cars.</h3>
            </center>
        </div>
    <table id="c0" width="100%" height="700">
        <tr><td></td><td><h1 style="color: red;text-align: center;">Our Cars</h1><br><br></td></tr>
        <tr>
            <td id="c1" width="33%"><img src="img/premio16.jpeg" width="100%"></td>
            <td id="c2" width="33%"><img src="img/hiace19.jpg" width="100%"></td>
            <td id="c3" width="33%"><img src="img/axio13.jpg" width="100%"></td>
        </tr>
        <tr>
            <td>
            <center>
                <h2 style="color: red">Toyota Premio 2016</h2>
                   Condision: Used ||  Model: 2016 ||  Price: 34,00,000
                   <li><a href="">Check Info Premio</a></li>
            </center>
            </td>
            <td>
            <center><h2 style="color: red">Toyota Hiace GL 2019</h2>
                    Condision: Used ||  Model: 2019 ||  Price: 31,50,000
                    <li><a href="">Check Info Hiace</a></li>
                </center>
            </td>
            <td>
                <center><h2 style="color: red">Toyota Axio 2013</h2>
                    Condision: Used || Model: 2013 ||  Price: 16,30,000
                    <li><a href="">Check Info Axio</a></li>
                </center>
            </td>
        </tr>
    </table>
        <table id="c0" width="100%" height="700">
        <tr>
            <td id="c1" width="33%"><img src="img/noah02.jpg" width="100%"></td>
            <td id="c2" width="33%"><img src="img/prius19.jpeg" width="100%"></td>
            <td id="c3" width="33%"><img src="img/alion07.jpeg" width="100%" ></td>
        </tr>
        <tr>
            <td>
            <center>
                <h2 style="color: red">Toyota Noah 2002</h2>
                   Condision: Used ||  Model: 2002 ||  Price: 5,90,000
                   <li><a href="">Check Info Noah</a></li>
            </center>
            </td>
            <td>
            <center><h2 style="color: red">Toyota Prius 2019</h2>
                    Condision: Used ||  Model: 2019 ||  Price: 34,50,000
                    <li><a href="">Check Info Prius</a></li>
                </center>
            </td>
            <td>
                <center><h2 style="color: red">Toyota Allion 2007</h2>
                    Condision: Used || Model: 2007 ||  Price: 29,30,000
                    <li><a href="">Check Info Allion</a></li>
                </center>
            </td>
        </tr>
    </table>

    </div>



</body>
</html>