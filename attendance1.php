<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
  <title>CSE-C Attendance</title>
</head>

<body>
  <div class="main-navbar">
    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">NoProxy.com</a>
    </nav>
  </div>
  <div class="main-body" style="padding: 60px">
    <form action="attendance1.php" method="POST" id="main-attendance-form" name="main-attendance-form">
      <div class="dateandtime" style="text-align: center; padding: 5px">
        <input type="date" name="date" id="date" /> <br /><br />
        <input type="time" name="time" id="time" /><br /><br />
      </div>

      <table class="table table-bordered table-hover table-striped">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Attendance</th>

            <th scope="col">Name</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <input type="checkbox" name="rollnos[]" value="18B81A05C1" />
              18B81A05C1
            </td>
            <td>Abhiroop</td>
          </tr>
          <tr>
            <td>
              <input type="checkbox" name="rollnos[]" value="18B81A05C2" />
              18B81A05C2
            </td>
            <td>Aditi</td>
          </tr>
          <tr>
            <td>
              <input type="checkbox" name="rollnos[]" value="18B81A05C3" />
              18B81A05C3
            </td>
            <td>Akhil</td>
          </tr>
          <tr>
            <td>
              <input type="checkbox" name="rollnos[]" value="18B81A05C4" />
              18B81A05C4
            </td>
            <td>Akshith</td>
          </tr>
          <tr>
            <td>
              <input type="checkbox" name="rollnos[]" value="18B81A05C5" />
              18B81A05C5
            </td>
            <td>Anvesh</td>
          </tr>
          <tr>
            <td>
              <input type="checkbox" name="rollnos[]" value="18B81A05C6" />
              18B81A05C6
            </td>
            <td>Ashwaq</td>
          </tr>
          <tr>
            <td>
              <input type="checkbox" name="rollnos[]" value="18B81A05C7" />
              18B81A05C7
            </td>
            <td>Avinash</td>
          </tr>
          <tr>
            <td>
              <input type="checkbox" name="rollnos[]" value="18B81A05C8" />
              18B81A05C8
            </td>
            <td>Bhanu</td>
          </tr>
          <tr>
            <td>
              <input type="checkbox" name="rollnos[]" value="18B81A05C9" />
              18B81A05C9
            </td>
            <td>Bhavani</td>
          </tr>
          <tr>
            <td>
              <input type="checkbox" name="rollnos[]" value="18B81A05D0" />
              18B81A05D0
            </td>
            <td>Chaitanya</td>
          </tr>
          <tr>
            <td>
              <input type="checkbox" name="rollnos[]" value="18B81A05D1" />
              18B81A05D1
            </td>
            <td>Sagar</td>
          </tr>
          <tr>
            <td>
              <input type="checkbox" name="rollnos[]" value="18B81A05D2" />
              18B81A05D2
            </td>
            <td>Dheeraj</td>
          </tr>
          <tr>
            <td>
              <input type="checkbox" name="rollnos[]" value="18B81A05D3" />
              18B81A05D3
            </td>
            <td>Harshitha J</td>
          </tr>
          <tr>
            <td>
              <input type="checkbox" name="rollnos[]" value="18B81A05D4" />
              18B81A05D4
            </td>
            <td>Harshitha A</td>
          </tr>
          <tr>
            <td>
              <input type="checkbox" name="rollnos[]" value="18B81A05D5" />
              18B81A05D5
            </td>
            <td>Indhu</td>
          </tr>
          <tr>
            <td>
              <input type="checkbox" name="rollnos[]" value="18B81A05D6" />
              18B81A05D6
            </td>
            <td>Hindudar</td>
          </tr>
          <tr>
            <td>
              <input type="checkbox" name="rollnos[]" value="18B81A05D7" />
              18B81A05D7
            </td>
            <td>Kailash</td>
          </tr>
          <tr>
            <td>
              <input type="checkbox" name="rollnos[]" value="18B81A05D8" />
              18B81A05D8
            </td>
            <td>Kasturi</td>
          </tr>
          <tr>
            <td>
              <input type="checkbox" name="rollnos[]" value="18B81A05D9" />
              18B81A05D9
            </td>
            <td>Suhruth</td>
          </tr>
          <tr>
            <td>
              <input type="checkbox" name="rollnos[]" value="18B81A05E0" />
              18B81A05E0
            </td>
            <td>Likhith</td>
          </tr>
          <tr>
            <td>
              <input type="checkbox" name="rollnos[]" value="18B81A05E1" />
              18B81A05E1
            </td>
            <td>Likitha</td>
          </tr>
          <tr>
            <td>
              <input type="checkbox" name="rollnos[]" value="18B81A05E2" />
              18B81A05E2
            </td>
            <td>Lokesh</td>
          </tr>
          <tr>
            <td>
              <input type="checkbox" name="rollnos[]" value="18B81A05E3" />
              18B81A05E3
            </td>
            <td>Manoj</td>
          </tr>
          <tr>
            <td>
              <input type="checkbox" name="rollnos[]" value="18B81A05E4" />
              18B81A05E4
            </td>
            <td>Manvitha</td>
          </tr>
          <tr>
            <td>
              <input type="checkbox" name="rollnos[]" value="18B81A05E5" />
              18B81A05E5
            </td>
            <td>Meghana</td>
          </tr>
          <tr>
            <td>
              <input type="checkbox" name="rollnos[]" value="18B81A05E6" />
              18B81A05E6
            </td>
            <td>Pavan</td>
          </tr>
          <tr>
            <td>
              <input type="checkbox" name="rollnos[]" value="18B81A05E7" />
              18B81A05E7
            </td>
            <td>Pooja</td>
          </tr>
          <tr>
            <td>
              <input type="checkbox" name="rollnos[]" value="18B81A05E8" />
              18B81A05E8
            </td>
            <td>Pranaya</td>
          </tr>
          <tr>
            <td>
              <input type="checkbox" name="rollnos[]" value="18B81A05E9" />
              18B81A05E9
            </td>
            <td>Prathyusha</td>
          </tr>
          <tr>
            <td>
              <input type="checkbox" name="rollnos[]" value="18B81A05F0" />
              18B81A05F0
            </td>
            <td>Puneeth</td>
          </tr>
          <tr>
            <td>
              <input type="checkbox" name="rollnos[]" value="18B81A05F1" />
              18B81A05F1
            </td>
            <td>Raheem</td>
          </tr>
          <tr>
            <td>
              <input type="checkbox" name="rollnos[]" value="18B81A05F2" />
              18B81A05F2
            </td>
            <td>Rajesh</td>
          </tr>
          <tr>
            <td>
              <input type="checkbox" name="rollnos[]" value="18B81A05F3" />
              18B81A05F3
            </td>
            <td>Reshma</td>
          </tr>
          <tr>
            <td>
              <input type="checkbox" name="rollnos[]" value="18B81A05F4" />
              18B81A05F4
            </td>
            <td>Rishika</td>
          </tr>
          <tr>
            <td>
              <input type="checkbox" name="rollnos[]" value="18B81A05F5" />
              18B81A05F5
            </td>
            <td>Faraz</td>
          </tr>
          <tr>
            <td>
              <input type="checkbox" name="rollnos[]" value="18B81A05F6" />
              18B81A05F6
            </td>
            <td>Rohan</td>
          </tr>
          <tr>
            <td>
              <input type="checkbox" name="rollnos[]" value="18B81A05F7" />
              18B81A05F7
            </td>
            <td>Rupesh</td>
          </tr>
          <tr>
            <td>
              <input type="checkbox" name="rollnos[]" value="18B81A05F8" />
              18B81A05F8
            </td>
            <td>Aakash</td>
          </tr>
          <tr>
            <td>
              <input type="checkbox" name="rollnos[]" value="18B81A05F9" />
              18B81A05F9
            </td>
            <td>Abhishikth</td>
          </tr>
          <tr>
            <td>
              <input type="checkbox" name="rollnos[]" value="18B81A05G0" />
              18B81A05G0
            </td>
            <td>Ganesh</td>
          </tr>
          <tr>
            <td>
              <input type="checkbox" name="rollnos[]" value="18B81A05G1" />
              18B81A05G1
            </td>
            <td>Koushik</td>
          </tr>
          <tr>
            <td>
              <input type="checkbox" name="rollnos[]" value="18B81A05G2" />
              18B81A05G2
            </td>
            <td>Rahul</td>
          </tr>
          <tr>
            <td>
              <input type="checkbox" name="rollnos[]" value="18B81A05G3" />
              18B81A05G3
            </td>
            <td>Sandhya</td>
          </tr>
          <tr>
            <td>
              <input type="checkbox" name="rollnos[]" value="18B81A05G4" />
              18B81A05G4
            </td>
            <td>Sathvika</td>
          </tr>
          <tr>
            <td>
              <input type="checkbox" name="rollnos[]" value="18B81A05G5" />
              18B81A05G5
            </td>
            <td>Sharath</td>
          </tr>
          <tr>
            <td>
              <input type="checkbox" name="rollnos[]" value="18B81A05G6" />
              18B81A05G6
            </td>
            <td>Shiva Nandh</td>
          </tr>
          <tr>
            <td>
              <input type="checkbox" name="rollnos[]" value="18B81A05G7" />
              18B81A05G7
            </td>
            <td>Shravya</td>
          </tr>

          <tr>
            <td>
              <input type="checkbox" name="rollnos[]" value="18B81A05G8" />
              18B81A05G8
            </td>
            <td>Varsha</td>
          </tr>
          <tr>
            <td>
              <input type="checkbox" name="rollnos[]" value="18B81A05G9" />
              18B81A05G9
            </td>
            <td>Shwetha</td>
          </tr>
          <tr>
            <td>
              <input type="checkbox" name="rollnos[]" value="18B81A05H0" />
              18B81A05H0
            </td>
            <td>Sreeja</td>
          </tr>
          <tr>
            <td>
              <input type="checkbox" name="rollnos[]" value="18B81A05F8" />
              18B81A05H1
            </td>
            <td>Sruthi</td>
          </tr>
          <tr>
            <td>
              <input type="checkbox" name="rollnos[]" value="18B81A05F8" />
              18B81A05H2
            </td>
            <td>Suhas</td>
          </tr>
          <tr>
            <td>
              <input type="checkbox" name="rollnos[]" value="18B81A05H3" />
              18B81A05H3
            </td>
            <td>Tharun</td>
          </tr>
          <tr>
            <td>
              <input type="checkbox" name="rollnos[]" value="18B81A05H4" />
              18B81A05H4
            </td>
            <td>B Vaishnavi</td>
          </tr>
          <tr>
            <td>
              <input type="checkbox" name="rollnos[]" value="18B81A05H5" />
              18B81A05H5
            </td>
            <td>Varun</td>
          </tr>
          <tr>
            <td>
              <input type="checkbox" name="rollnos[]" value="18B81A05H6" />
              18B81A05H6
            </td>
            <td>Gowtham</td>
          </tr>
          <tr>
            <td>
              <input type="checkbox" name="rollnos[]" value="18B81A05H7" />
              18B81A05H7
            </td>
            <td>Gvs Vaishnavi</td>
          </tr>
          <tr>
            <td>
              <input type="checkbox" name="rollnos[]" value="18B81A05H9" />
              18B81A05H9
            </td>
            <td>Vinay</td>
          </tr>
        </tbody>
      </table>
      <br />
      <div class="submit text-center">
        <input type="submit" class="btn btn-primary" name="ATTENDANCE" value="Submit" />
      </div>
    </form>
  </div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
<?php
$con = mysqli_connect("localhost", "aakash", "hack", "aakash");
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
if (isset($_POST['ATTENDANCE'])) {
  $date = strval($_POST['date']);

  $date = str_replace('-', '_', $date);
  echo $date;
  $time = $_POST['time'];
  $present = $_POST['rollnos'];

  $timex = explode(":", $time);
  $x = $timex[0];
  $period = "";
  if ($x == 9) {
    $period = 'period1';
  } else if ($x == 10) {
    $period = 'period2';
  } else if ($x == 11) {
    $period = 'period3';
  } else if ($x == 13) {
    $period = 'period4';
  } else if ($x == 14) {
    $period = 'period5';
  } else if ($x == 15) {
    $period = 'period6';
  }

  //echo $rollnos;
  echo $date;
  echo $period;
  if ($period == 'period1') {
    $rollnos = array(
      '18B81A05C1', '18B81A05C2', '18B81A05C3', '18B81A05C4', '18B81A05C5', '18B81A05C6', '18B81A05C7', '18B81A05C8', '18B81A05C9', '18B81A05D0', '18B81A05D1',
      '18B81A05D2', '18B81A05D3', '18B81A05D4', '18B81A05D5', '18B81A05D6', '18B81A05D7', '18B81A05D8', '18B81A05D9', '18B81A05E0', '18B81A05E1',
      '18B81A05E2', '18B81A05E3', '18B81A05E4', '18B81A05E5', '18B81A05E6', '18B81A05E7', '18B81A05E8', '18B81A05E9', '18B81A05F0', '18B81A05F1', '18B81A05F2',
      '18B81A05F3', '18B81A05F4', '18B81A05F5', '18B81A05F6', '18B81A05F7', '18B81A05F8', '18B81A05F9', '18B81A05G0', '18B81A05G1', '18B81A05G2',
      '18B81A05G3', '18B81A05G4', '18B81A05G5', '18B81A05G6', '18B81A05G7', '18B81A05G8', '18B81A05G9', '18B81A05H0', '18B81A05H1', '18B81A05H2',
      '18B81A05H3', '18B81A05H4', '18B81A05H5', '18B81A05H6', '18B81A05H7', '18B81A05H9'
    );
    $sql0 = "create table $date (RollNo varchar(255) NOT NULL , period1 tinyint(4) ,period2 tinyint(4) ,period3 tinyint(4) ,period4 tinyint(4) ,period5 tinyint(4) ,period6 tinyint(4), PRIMARY KEY (RollNo));";
    if (!(mysqli_query($con, $sql0))) {
      exit("creation failed");
    } 
    foreach ($rollnos as $roll) {
      // echo "$roll <br>";
      $sql1 = "insert into $date (RollNo,period1,period2,period3,period4,period5,period6) values('$roll',1,1,1,1,1,1);";
      if (!(mysqli_query($con, $sql1))) {
        exit("insertionfailed");
      }
    }
  }
  foreach ($present as $key => $value) {
    //echo $value ."<br />";
    $sql2 = "update $date set $period=0 where RollNo='$value';";
    if (!(mysqli_query($con, $sql2))) {

      exit("updation failed");
    }
  }
  sleep(2);
  echo "<script type='text/javascript'>alert('Attendance Marked');</script>";
}
mysqli_close($con);
?>