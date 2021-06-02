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
        <form action="register.php" method="POST">
            <input type="text" name="name" id="name" placeholder="Enter Your Name" required><br><br>
            <input type="email" name="email" id="email" placeholder="Enter Your Email Address" required><br><br>
            <input type="password" name="pin" id="pin" maxlength="4" placeholder="Enter Pin for Your Branch" required><br><br>
            <input type="password" name="password" id="pass" placeholder="Enter Your Password" required><br><br>
            <input type="password" name="repassword" id="repass" placeholder="Re-type Password" required><br><br>
            <input type="submit" name="register" id="register" value="REGISTER">
        </form>
    </div>
</body>
</html>
<?php

$con = mysqli_connect("localhost","aakash","hack","aakash");
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
  }
  if(isset($_POST['register']))
  {
      $name=$_POST['name'];
      $email=$_POST['email'];
      $pws=$_POST['password'];
      $repass=$_POST['repassword'];
      $pin=$_POST['pin'];
      $sql1="select * from faculty where email = '$email' ;";
      $row=mysqli_query($con,$sql1);
      if(mysqli_num_rows($row)>0) 
      {
        echo "<script type='text/javascript'>alert('User already Exists');</script>";
      }
      else{
          if($pws!==$repass)
          {
            echo "<script type='text/javascript'>alert('Passwords didnot match');</script>";
          }
          else if($pin!='0000')
          {
            echo "<script type='text/javascript'>alert('Incorrect pin');</script>";
          }
          else{
              $sql2="insert into faculty (name,email,password) values ('$name','$email','$pws');";
              if(mysqli_query($con,$sql2))
              {
              echo "<script type='text/javascript'>alert('Registered Sucessfully');</script>";
              }
              else
              {
              echo "<script type='text/javascript'>alert('Registration failed');</script>";
              }

          }
      }
      

  }
  mysqli_close($con);




?>

