<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="faculty_styles.css">
    <title>Document</title>
</head>
<body>
    <div class="header">
        <img src="logo1.jpg" alt="CVR_LOGO" id="cvr_logo">
        <div class="info">
            <h1>CVR COLLEGE OF ENGINEERING</h1>
            <h2>In Pursuit Of Excellence</h2>
            <h3>(An Autonomous Institution, NAAC 'A' Grade)</h3>
        </div>
        
    </div>
    <div class="container">
        <form action="faculty_login.php" method="POST">
            <input type="email" name="email" id="email" placeholder="Enter Your Email ID" required><br><br>
            <input type="password" name="pass" id="pass" placeholder="Enter Your Password" required><br><br>
            <input type="submit" name="login" id="login" value="login">
            
        </form>
    </div>
</body>
</html>
<?php

$con = mysqli_connect("localhost","aakash","hack","aakash");
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
  }
  if(isset($_POST['login']))
  {
     $email=$_POST['email'];
     $pass=$_POST['pass'];
     $sql="select * from faculty where email='$email' and password='$pass';";
     $row=mysqli_query($con,$sql);
     if(mysqli_num_rows($row)>0)
     {
        sleep(2);
        header("Location: attendance.html"); 
     }
     else{
        echo "<script type='text/javascript'>alert('Invalid Credentials');</script>";
     }

  }
  mysqli_close($con);




?>

