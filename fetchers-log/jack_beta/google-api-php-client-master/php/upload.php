<?php 
$registration = $_POST['registration'];
$name= $_POST['name'];
$email= $_POST['email'];

if ($registration == "success"){
    header("Location: filter_1.php");
}

?>