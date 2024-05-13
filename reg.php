<?php
session_start();

if(isset($_POST['submit']))
{

$id = $_POST['id'];
$name =$_POST['fullname'];
$email=$_POST['email'];
$password = $_POST['password'] 
$DOB =$_POST['DOB'];  
$number =$_POST['number']; 
$gender =$_POST['gender'];
$db = mysqli_connect("localhost","root","","carshop");
$sql = "insert into customer details(Id, Name, Email, Password, Dob, Number, Gender) value('$id','$name', '$email','$password', '$DOB','$number','$gender')";
if(mysqli_query($db,$sql))
{
    mysqli_query($db,"insert into login(email) value('$email')");
    $_SESSION['email'] = $email;

    header("location:reg1.php");

}
else
{
echo "data not insert";
}
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Registration</title>
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
    height:100px;
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
    <center>
    <br><br><br><br>
    <div style="background:rgba(255,255,255,.5); width:70%; hight: 400px;"> 
        
            <form method="post" action="reg.php">
            
            <fieldset>
                <table>
                    <tr>
                    <td><label for="id">ID:</label></td>
                    <td><input type="number" name="id" id="ID" placeholder="Choice uniqe ID" required></td>
                    </tr>
                    <tr>
                    <td><label for="fullname">Name:</label></td>
                    <td><input type="text" name="fullname" id="fullname" placeholder="Your Name" required></td>
                    </tr>
                    <tr>
                    <td><label for="email">E-mail:</label></td>
                    <td><input type="email" name="email" id="email" placeholder="email@xyz.com" required></td>
                    </tr>
                    <tr>
                    <td><label for="password">Password:</label></td>
                    <td><input type="password" name="password" id="password" placeholder="A Strong Password" required></td>
                    </tr>
                    <tr>
                    <td><label for="gender">Gender:</label></td>
                        <td>
                            Male<input type="radio" name="gender" id="gender" value="male" required>
                            Female<input type="radio" name="gender" id="gender" value="female">
                            Other<input type="radio" name="gender" id="gender" value="other">
                        </td>
                    </tr>
                    <tr>
                    <td><label for="DOB">Date of Birth:</label></td>
                    <td><input type="date" name="DOB" id="DOB" required></td>
                    </tr>
                    <tr>
                    <td><label for="number">Tel/Mobile Number:</label></td>
                    <td><input type="tel" name="number" id="number" placeholder="01XX XXX XXXX" required></td>
                    </tr>
            </table> 
            <input style="width: 120px; height: 30px; border-radius: 20px; opacity: 0.7" type="submit" name="submit"value="submit">
            
            
            </form>
        </fieldset>
    </center>
<?php

?>
        </div>

    </div>

</body>
</html>