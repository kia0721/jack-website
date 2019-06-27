<?php

// print_r($_POST);
// print_r($_FILES);



?>

<?php
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST['submit_btn'] == 'Submit') {
    session_unset(); 
    header("Location: login.php");
  }}

// if (isset($_SESSION['login_user'])) {
// echo $_SESSION['login_user'] ;
// } else {

//     header ("Location:login.php");
//   exit();
// }

?>

<!DOCTYPE html>
<html>
<head>
  <title>JACK LOG UPLOAD</title>
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


<div class="login-container" style="margin:auto; width:400px; height:520px;"> 
<form name="uploadForm" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
        <p class="header" style="color:#484848; padding-top:55px; text-align:center;">Upload</p>
        <hr style="padding-bottom:40px;">

        <div class="upload-btn-wrapper" style="padding-bottom:120px;">
            <button class="loginbutton button1" style="margin:auto;">Upload</button>
            <input type="file" name="test">
        </div>
        <input type="submit" name="submit_btn" class="button1 loginbutton" style="margin:auto;" onclick="" value="Submit">


    </form>


</div>
</div>





















</body>

</html>

<?php


// if form is submitted
if(isset($_POST['submit_btn'])) 
{

    $fileExistsFlag = 0; 
    $fileName = $_FILES['test']['name'];

    $link = mysqli_connect("localhost","root","j@ck.2k18@AWS","allan_jack-blog") or die("Error ".mysqli_error($link));

    $query = "SELECT image_title FROM jack_fetcherslog WHERE image_title='$fileName'";	
    $result = $link->query($query) or die("Error : ".mysqli_error($link));
    while($row = mysqli_fetch_array($result)) {
        if($row['filename'] == $fileName) {
            $fileExistsFlag = 1;
        }		
    }

    $quality = 25;
    // $source_url = "/opt/lampp/htdocs/project_status_dashboard/jack_beta/google-api-php-client-master/php/files/";
    $destination_url = "files/$fileName";


    if($fileExistsFlag == 0) { 
        $target = "files/temp/";		
        $fileTarget = $target.$fileName;	
        $tempFileName = $_FILES["test"]["tmp_name"];
        // $fileDescription = $_POST['Description'];	
        $result = move_uploaded_file($tempFileName,$fileTarget);

        compressimages($fileTarget, $destination_url, $quality);

        
        if($result) { 
        
            echo "Your file <html><b><i>".$fileName."</i></b></html> has been successfully uploaded";		
            $query = "INSERT INTO jack_fetcherslog(image_id,image_path,image_title) VALUES (".$_GET['id'].",$destination_url,$fileName)";
            $link->query($query) or die("Error : ".mysqli_error($link));			
        }
        else {			
            echo "Sorry, your file was not uploaded properly. Please try again.";			
        }
        mysqli_close($link);
    }

    else {
        echo "File <html><b><i>".$fileName."</i></b></html> already exists in your folder. Please rename the file and try again.";
        mysqli_close($link);
    }	

}



function compressimages($source_url, $destination_url, $quality) {

 $info = getimagesize($source_url);

  if ($info['mime'] == 'image/jpeg')
        $image = imagecreatefromjpeg($source_url);

  elseif ($info['mime'] == 'image/gif')
        $image = imagecreatefromgif($source_url);

elseif ($info['mime'] == 'image/png')
        $image = imagecreatefrompng($source_url);

  imagejpeg($image, $destination_url, $quality);
return $destination_url;
}

?>



<!-- <form name="uploadForm" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
        <p class="text" style="color:#484848; margin-left:10px; margin-top:60px;">Upload File:</p>
        <div style="height:200px; width:200px; margin-top:-70px; margin-left:10px;">
            <input type="file" style="opacity:1; width:200px; height:80px;" name="test">
        </div>
        <button type="submit" name="submit_btn" class="button1 loginbutton" style="margin-top:-30px;" onclick="">Submit
        </button>
    </form> -->