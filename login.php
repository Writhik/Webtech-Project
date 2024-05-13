<?php
include 'sqlquery/function.php';
session_start();

$email;
?>

<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link href="img/car.png" rel="icon" type="img/icon">
</head>
<style>
body {
  background-image: url('img/back.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
td{
    width: 300px;
    height: 50px;
}
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
            <li><a href="index.php">Home</a></li>
                <li><a href="contact.php">Contact Us</a></li> 
                <li><a href="about.php">About Us</a></li>
        <?php
        if (isset($_SESSION['email'])) {
            echo '<li><a href="logout.php"><p>Logout</p></a></li>';
        } else {
            echo '<li><a href="login.php">Login</a></li>';
        }
        ?> 
            </ul>
        </div>
        
    </div>
    <?php

    ?>
    <center>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <div style="background:rgba(255,255,255,.5); width:70%; hight: 400px;"> 
        
            <form method="post" action="login.php">
            
            <fieldset>
                <table>

                    <tr>
                    <td><label for="Name">Name:</label></td>
                    <td><input type="name" name="name" id="name" placeholder="Your Name" ></td>
                    </tr>
                    <tr>
                    <td><label for="password">Password:</label></td>
                    <td><input type="text" name="password" id="password" placeholder="Password" ></td>
                    </tr>
					<tr>
					<td><input style="width: 120px; height: 30px; border-radius: 20px; opacity: 0.7" type="submit" name="reg"value="Sign Up"></td>
					<td><input style="width: 120px; height: 30px; border-radius: 20px; opacity: 0.7" type="submit" name="login"value="Login"></td>
					</tr>
                    <tr>
    	            <a href= 'forget.php'><u><p><label style="color:red;">Forget Username/Password?</lable></p></u></a>
                    </tr>
                </table>
                
	

                </div>

            </form>

        </fieldset>
        </center>



    </div>
<?php
if(isset($_POST['login']))
{
$name =$_POST['name'];
$password =$_POST['password']; 

$db = mysqli_connect("localhost","root","","carshop");
$query = "SELECT email from login where Name = '$name' AND Password = '$password'";
$verify = getString($query);

if($name = $_POST['name'] && $password= $_POST['password']){
    $_SESSION['email'] = getString($query);
    $email=$_SESSION['email'];
	header("location: index.php");	
}
else if($verify == 'Error') //1 row return
{
    print("<center>Wrong username/password!</center>");

}
else 
{
    $_SESSION['email'] = getString($query);
    $email=$_SESSION['email'];
	header("location: index.php");	
}
}
if (isset($_POST['reg'])){
	header("location: reg.php");	
}
?>
        
</body>
</html>