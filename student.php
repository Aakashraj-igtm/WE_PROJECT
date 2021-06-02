<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
  <link rel="stylesheet" href="student_styles.css"/>
  <title>CSE-C Attendance</title>
</head>

<body>
  <div class="main-navbar">
    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">NoProxy.com</a>
    </nav>
  </div>
  <div class="container">
        <form action="student.php" method="POST">
            <input type="text" name="rollno" id="rollno" placeholder="Enter your roll no"><br><br>

            <input type="date" name="fromdate" id="fromdate" placeholder="Enter from Date"><br><br>

            <input type="date" name="todate" id="todate" placeholder="Enter to date"><br><br>
            
            <input type="submit" name="check-att" id="check-att" value="CHECK ATTENDANCE">
        </form>
    </div>

</html>

<?php
$con = mysqli_connect("localhost","aakash","hack","aakash");
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
  }

  if(isset($_POST['check-att']))
  {
    $rollno=$_POST['rollno'];
    $calc=0;
    $per=0;
    $rollno=strtoupper($rollno);
    $date1 = strval($_POST['fromdate']);
   
    $date2=strval($_POST['todate']);
    $date1=date_create($date1);
    $start=$date1;
    $dummy=$start;
$date2=date_create($date2);
$diff=date_diff($date1,$date2);
$diff=intval(strval($diff->format("%a")));

//echo $diff;
$cnt=0;
$x=0;$y=0;
$calc=0;


while($x<=$diff)
{

  date_add($start,date_interval_create_from_date_string(strval(strval($cnt)." days")));
  $dummy=strval(date_format($start,"Y_m_d"));
  $sql1="select * from $dummy where RollNo='$rollno';";
  
  if ($result = mysqli_query($con, $sql1))
  {
    $row=mysqli_fetch_row($result);
    $calc+=$row[1]+$row[2]+$row[3]+$row[4]+$row[5]+$row[6];
    $y++;
  }

  if($cnt==0)
  {
    $cnt=1;
  }
  $x++;
}
$per=($calc*100)/($y*6);
$per = number_format($per, 2);
echo "Attendance Percentage of ",$rollno," is ",$per,"<br>";
    //$date = str_replace('-', '_', $date);
    //$sql1="select * from $date where RollNo='$rollno';";
    /*if ($result = mysqli_query($con, $sql1)) {
      // Fetch one and one row
      $row=mysqli_fetch_row($result);
      $calc=$row[1]+$row[2]+$row[3]+$row[4]+$row[5]+$row[6];
      $per=($calc*100)/6;
      $per = number_format($per, 2);
      echo "Attendance Percentage of ",$rollno," is ",$per;
    }
    else
    {
      echo "<script type='text/javascript'>alert('Invalid Details');</script>";

    }*/

  }


  mysqli_close($con);

?>
