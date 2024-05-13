<?php
include 'sqlquery/function.php';
session_start();

$email = null;
?>
<!DOCTYPE html>
<html>
<head>
<title>Contact Us</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link href="img/car.png" rel="icon" type="img/icon">
</head>
<style>

td{
    width: 300px;
    height: 50px;
}
</style>
<body>
<div id="full">
    <div style="background-image: url('img/aboutback.png');background-size: 100% 1080px; width: 100%; height: 900px">
        <div id="header"> <div id="logo">
            <h1><font color="white">Hotel</font></h1>
        </div>

            <div id="nav">
                <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
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
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <div style="background:rgba(255,255,255,.7); width:70%; hight: 400px;"> 
        <h1>Welcome to the Help Center</h1>
        <p>Customer Service – we're available 24/7</p>
        <fieldset>
        <table>
        <tr>
        <td>
        <h3>Send us a message</h3>
        <p>Contact our agents about your query, and we'll reply as soon as possible.<br> <u>xyz@gmail.com</u><p>
        </td>
        <td>
        <h3>Call us</h3>
        <p>For anything urgent, you can call us 24/7 at a local or international phone number.<br><u>+08801234567891</u></p>
        </td>
        </tr>
        </table>
        </fieldset>
        </div>
        </center>
    </div>
</div>

</body>
</html>