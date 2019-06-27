<?php
 session_start();

include ("config.php");
 $conn = mysqli_connect($servername, $username, $password, $database);

//echo "<pre>";
//echo "test";
//die();

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$track = $_GET['value1'];
$level = $_GET['level'];
$class = "0";

$result = mysqli_query($conn, "SELECT * FROM jack_course x, jack_courseschedule y  where x.courseLevel='$level' and x.track='$track' and x.courseType ='$class' and y.course = x.ID");

?>

<?php
 if($_SERVER["REQUEST_METHOD"] == "POST") {
  if ($_POST['logout'] == 'Log Out') {
  session_unset(); 
  header("Location: login.php");
}}



if (isset($_SESSION['login_user'])) {

} else {
  // User is not authorized!
  header('Location: login.php');
  exit();
}

// ?>







<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>JACK LOG SEARCH QUERY</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="filter3.css">
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Didact Gothic" rel="stylesheet">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <script src="filter3.js"></script>


</head>
<body>
  <div class="center">
  <div class="v-align">
    <div class="box">
  <table class="table center v-align">
    <?php
if(isset($_POST['value'])) {
    $track = $_GET['value1'];
    $level = $_GET['level'];
    $class = $_POST['value'];
    $result = mysqli_query($conn, "SELECT * FROM jack_course x, jack_courseschedule y  where x.courseLevel='$level' and x.track='$track' and x.courseType ='$class' and y.course = x.ID");
}
    ?>



    <tr class="table_header">
      <td>Course Title</td>
      <td>Schedule</td>
      <td>Total Hours</td>
      <td>Fee</td>
    
      <td> 
         </td>
      <form method="post">
       <td>
        
        <select name="value">
      
          <option value="0">Summer</option>
          <option value="1">Weekender</option>
          <option value="2">Mentoring</option>
        </select>
       </td>

         
      <td> <input type="submit" class="searchbutton" value="Search"></td></form>
    </tr>
    <?php
      while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        if ($result->num_rows > 0) {
      ?>
      <tr class="row">
        <td><?php echo $row['courseTitle']?></td>
        <td><?php 
        $id = $row['ID'];
        $query = "SELECT FROM jack_courseschedule WHERE course = '$id'";
        $date = $row['strDate'];
        echo $date
        ?></td>
        <td><?php
        $hours = $row['hours'];
        echo $hours ?>
       <p style="opacity:0;"> <?php 
        $query = "SELECT FROM jack_courseschedule WHERE course = '$id'";
        $course = $row['course'];
       ?></p></td>
        <td><?php echo $row['fee']?> PESOS</td>              
       
        <td>
        <a href="view.php?id=<?php
              $level = $_GET['level'];
          $query3 =mysqli_query($conn,"SELECT id FROM jack_courseschedule x WHERE '$date' = x.strDate AND '$level' = x.level and '$course' = x.course");
          while ($row = mysqli_fetch_array($query3, MYSQLI_ASSOC)) {
            if ($query3->num_rows > 0) {
          echo $row['id'];
            }}
          ?>">
    <button type="button" class="viewbutton" value="Options" id="myBtn2" > View </button> </a>
        </a>        </td>
        <td>

          <a href="options.php?id=<?php
              $level = $_GET['level'];
          $query3 =mysqli_query($conn,"SELECT id FROM jack_courseschedule x WHERE '$date' = x.strDate AND '$level' = x.level and '$course' = x.course");
          while ($row = mysqli_fetch_array($query3, MYSQLI_ASSOC)) {
            if ($query3->num_rows > 0) {
          echo $row['id'];
            }}
          ?>">
    <button type="button" class="editbutton" value="Options" id="myBtn2" > Options </button> </a>
        </a>
              
              
              
              
            

              

             
         

      
        </td>
        <td>
       
        </td>
      </tr>

    <?php
      }else{
    ?>
      <tr class="row">
        <td colspan=6>No Data Registered.</td>
      </tr>
    <?php
      }
    }
      mysqli_free_result($result);

    ?>

  </table>
  </div>
  </div>
  </div>
<form method='POST'>
<input type="submit" class="logout" value="Log Out" name="logout">
</form>


 

 
  </body>
</html>

