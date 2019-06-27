<?php
   include('config.php');
   session_unset(); 


   session_start();
  

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT * FROM jack_userdetails WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      // $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
		
      if($count == 1) {
         $_SESSION['login_user'] = $myusername;
         $_SESSION['auth'] = "YES";
         header ("Location:filter_1.php");
      }
      else {
         $error = "Your Login Name or Password is invalid";
         echo '<p class="error">Your Login Name or Password is invalid</p>';

      }
   }
?>

<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Didact Gothic" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.1.3/yeti/bootstrap.css">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
<title>Login</title>
</head>
<body>
  <div class="login-container">
  <h1 style="margin-top:20px; margin-left:20px; padding-top:20px;" class="header">
    Students' Log Database
  </h1>
 
  <form style="margin:20px;" method="post">
   <div class="form-group text">
      <label for="exampleInputEmail1" style="font-size:20px;color:black;">Username</label>
     
      
      <input type="text" class="form-control" id="exampleInputEmail1" name="username" aria-describedby="emailHelp" placeholder="Enter Username">
      <small id="emailHelp" class="form-text text-muted">Always remember this!</small>
    
      <label for="exampleInputPassword1" style="font-size:20px;color:black;">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
        <small id="emailHelp2" class="form-text text-muted">Especially this!</small>
  
    <input type="submit" class="loginbutton button1 text" style="margin-left:40%" value="Confirm">
     </div>
    </form>
  </div>
  </body>
</html>

