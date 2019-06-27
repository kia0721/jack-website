


 <?php
 session_start();

 if($_SERVER["REQUEST_METHOD"] == "POST") {
  session_unset(); 
  header("Location: login.php");
}


if (($_SESSION['login_user'] == "jackAdmin"  || $_SESSION['login_user'] == "jackTeacher") && $_SESSION['auth'] == "YES") {

} 

else {
  header ("Location:login.php");
  echo 'DNJIOPBOWFUOWHIOjjjjjj';
  exit();
}

?> 

<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>JACK LOG FILTER 1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="filter1.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">


  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="filter1.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.1.3/yeti/bootstrap.css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


</head>

<body>
<form method='POST'>
<input type="submit" class="logout" value="Log Out" name="logout">
</form>

  <div class="filtercontainer">
    <h1 class="header" style="color:white; width:1000px;">Welcome to the J.A.C.K. Fetcher's Log Archives.</h1>
 </div>
  <br>

  

<table>
  <tr>
  <td class="td"><img class="image1" id="novice" src="https://cdn.glitch.com/9842ca08-870c-4939-9fb6-6438848ff6d4%2F0-02-06-df85fc3ee370f29984ce45eab1a4af715e7260f1627868db0ef287e3f0fc897c_full.png?1553668186617"></td>
    <td>

    <input class="filter_button novicebutton" name="novice" onmouseover="Func1()" onmouseout="Func2()" type="button" onclick="window.location='filter2.php?level=0'" value= "NOVICE">

    </td>
    <td>
      <p class="text border">The Novice Coder classes are beginner courses that allow kids as young as 6 to 8 years old to start their coding adventures. This is an opportunity for them to learn the basics of coding while boosting their creativity and logic.</p>
    </td>
  </tr>
    <tr>
       <td><img class="image1" id="junior" src="https://cdn.glitch.com/9842ca08-870c-4939-9fb6-6438848ff6d4%2F0-02-06-3033cbe1f8dda323f700fbbf9abfa0297833175a2b633a81d57f15eda87e6e18_full.png?1553666196598"></td>
  <td class="td">

  <input class="filter_button juniorbutton" name="junior" onmouseover="Func3()" onmouseout="Func4()" type="button" onclick="window.location='filter2.php?level=1'" value= "JUNIOR">

    </td>
      <td>
        <p class="text border">The Junior Coder classes inspire students aged 9 to 11 to create and innovate, as they build a solid foundation for their programming skills. Here, they get an advantage in today’s digital world by acquiring more advanced concepts and skills.</p>
      </td>
  </tr>
  <tr>
     <td><img class="image1" id="master" src="https://cdn.glitch.com/9842ca08-870c-4939-9fb6-6438848ff6d4%2F0-02-06-96b14ee4f61cbcefa8275215132d65010fea8cc1398c2fe65f309f7486d2c655_full.png?1553666196882"></td>
    <td class="td">

  <input class="filter_button masterbutton" name="novice" onmouseover="Func5()" onmouseout="Func6()" type="button" onclick="window.location='filter2.php?level=2'" value= "MASTER">

    </td>
    <td>
      <p class="text border">The Master Coder classes allow students aged 12 to 17 to further strengthen their programming knowledge and skills. In this program, they are trained to use technology to create meaningful projects and relevant solutions to real-world problems.</p>
    </td>
  </tr>
  </table>




</body>
</html>
