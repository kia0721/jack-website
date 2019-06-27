<?php
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
  session_unset(); 
  header("Location: login.php");
}




if ((isset($_SESSION['login_user'])) && (($_SESSION['auth'] == "YES"))) {

} else {
  // User is not authorized!
  header ("Location:login.php");
  exit();
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>JACK LOG FILTER 2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="filter-2.css">
    <script src="filter2.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<body>
<?php

$level = $_GET['level'];

?>
<form method='POST'>
<input type="submit" class="logout" value="Log Out" name="logout">
</form>
  <div class="fluid-container" onload="declare()">
 <div class="row">
<div class="col-sm-6" style="margin-left:165px; margin-top:40px;">
   <input class="header track_button trackbutton1" onmouseover="myFunc1()" onmouseout="myFunc2()" id ="CC" type="button" onclick="window.location='filter-3.php?level=<?php echo $level;?>&value1=0'" value="Creative Computing" >
<input class="header track_button trackbutton2" onmouseover="myFunc3()" onmouseout="myFunc4()" id="T" type="button" onclick="window.location='filter-3.php?level=<?php echo $level;?>&value1=1'" value= "Thinkering">
</div></div>
<div class="col-sm-6" style="margin-left:650px; margin-top:-600px;">
<input class="header track_button trackbutton3" onmouseover="myFunc5()" onmouseout="myFunc6()" id="AD" type="button" onclick="window.location='filter-3.php?level=<?php echo $level;?>&value1=2'" value= "Application Development">
<input class="header track_button trackbutton4" onmouseover="myFunc7()" onmouseout="myFunc8()" id="E" type="button" onclick="window.location='filter-3.php?level=<?php echo $level;?>&value1=3'" value= "Electives">
</div>
</div>



</body>
</html>

<script>

var href="0"

  var level= $_GET['level']
  if (empty($_GET)) {
   echo 'Oh NO';
}
  var value1="value1";
  var value2="value2";
//  var queryString = "?para1=" + value1 + "&para2=" + value2;
  window.location.href = "page2.html" + queryString;
</script>

