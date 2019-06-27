<?php

// print_r($_POST);
// print_r($_FILES);



?>

<?php
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
    session_unset(); 
    header("Location: login.php");
  }

// if (isset($_SESSION['login_user'])) {
// echo $_SESSION['login_user'] ;
// } else {

//     header ("Location:login.php");
//   exit();
// }

?>
<?php

include ("config.php");
 $conn = mysqli_connect($servername, $username, $password, $database);



if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_GET['id'];


$result = mysqli_query($conn, "SELECT * FROM jack_fetcherslog j  where j.id='$id'");

?>








<html>
<head>
  <title>JACK LOG VIEW IMAGE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="options.css">
  <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="options.js"></script>
 

  
</head>
<body style="text-align:center;">


<div class="login-container" style="margin:auto; width:1000px; height:600px;"> 
        <p class="header" style="color:#484848; padding-top:55px; text-align:center;">View Logs</p>
  <?php
   while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    if ($result->num_rows > 0) {
      ?>
      
      <img src="<?php echo $row['image_path']?>" class="image" alt="NO IMAGE FOUND">
           
           <?php
    }}
            
            ?>
      



</div>
</div>


