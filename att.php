<?php
$con = mysqli_connect("localhost","aakash","hack","aakash");
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
  }
  if(isset($_POST['ATTENDANCE']))
  {
      $date=strval($_POST['date']);
      
      $date=str_replace('-','_',$date);
      echo $date;
      $time=$_POST['time'];
      $present=$_POST['rollnos'];
   
      $timex=explode(":",$time);
      $x=$timex[0];
      $period="";
      if($x==9)
      {
          $period='period1';
      }
      else if($x==10)
      {
          $period='period2';
      }
      else if($x==11)
      {
          $period='period3';
      }
      else if($x==13)
      {
          $period='period4';
      }
      else if($x==14)
      {
          $period='period5';
      }
      else if($x==15)
      {
          $period='period6';
      }
   
         //echo $rollnos;
         echo $date;
         echo $period;
        if($period=='period1')
        {
            $rollnos=array('18B81A05C1','18B81A05C2','18B81A05C3','18B81A05C4','18B81A05C5','18B81A05C6','18B81A05C7','18B81A05C8','18B81A05C9','18B81A05D0','18B81A05D1',
            '18B81A05D2','18B81A05D3','18B81A05D4','18B81A05D5','18B81A05D6','18B81A05D7','18B81A05D8','18B81A05D9','18B81A05E0','18B81A05E1',
            '18B81A05E2','18B81A05E3','18B81A05E4','18B81A05E5','18B81A05E6','18B81A05E7','18B81A05E8','18B81A05E9','18B81A05F0','18B81A05F1','18B81A05F2',
            '18B81A05F3','18B81A05F4','18B81A05F5','18B81A05F6','18B81A05F7','18B81A05F8','18B81A05F9','18B81A05G0','18B81A05G1','18B81A05G2',
            '18B81A05G3','18B81A05G4','18B81A05G5','18B81A05G6','18B81A05G7','18B81A05G8','18B81A05G9','18B81A05H0','18B81A05H1','18B81A05H2',
            '18B81A05H3','18B81A05H4','18B81A05H5','18B81A05H6','18B81A05H7','18B81A05H9');
            $sql0="create table $date (RollNo varchar(255) , period1 tinyint(4) ,period2 tinyint(4) ,period3 tinyint(4) ,period4 tinyint(4) ,period5 tinyint(4) ,period6 tinyint(4));";
            if(!(mysqli_query($con,$sql0)))
                {
                    echo "creation failed";
                }
            else
            {
                echo 'created';
            }
            foreach($rollnos as $roll)
            {
               // echo "$roll <br>";
              $sql1="insert into  $date (RollNo,period1,period2,period3,period4,period5,period6) values ('$roll',1,1,1,1,1,1);";
                if(!(mysqli_query($con,$sql1)))
                {
                    echo "insertion failed";
                }
            }
        }
     
     foreach($present as $key => $value)
      {
          //echo $value ."<br>";
          $sql2="update $date set $period=0 where RollNo='$value';";
          if(!(mysqli_query($con,$sql2)))
          {
              echo "updation failed";
          }
      }
      echo "<script type='text/javascript'>alert('Attendance Marked');</script>";

  }
  mysqli_close($con);
  ?>