<?php
include 'sqlquery/function.php';
session_start();

$email = null; 
?>
<!DOCTYPE html>
<html>
<head>
<title>About Us</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link href="img/car.png" rel="icon" type="img/icon">
</head>
<body>
<div id="full">
<style>
body {
  background-image: url('img/aboutback.png');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
td{
    width: 300px;
    height:100px;
}
</style>

        <div id="header"> <div id="logo">
            <h1><font color="Red">Luxury Cars</font></h1>
        </div>

            <div id="nav">
                <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="contact.php">Contact Us</a></li> 
                <li><a href="reg.php">Register</li>

                <?php
        if (isset($_SESSION['email'])) {
            echo '<li><a href="logout.php"><p>Logout</p></a></li>';
        } else {
            echo '<li><a href="login.php">Login</a></li>';
        }
        ?>
                </ul>
            </div>
        <center>  
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <div style="background:rgba(255,255,255,.4); width:70%; hight: 400px;"> 
        <h1>Welcome to Luxury Cars!</h1>
        <fieldset>
        <table>
        <tr>
        
<h3>
We're a passionate team of car experts dedicated to providing new/used cars and give you a expert knowledge about cars. We also have a great team for car maintenance. 
    </h3>
        </tr>
        </table>
        </fieldset>
        </div>
        </center>
    </div>
</div>

</body>
</html>