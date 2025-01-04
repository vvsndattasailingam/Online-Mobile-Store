<?php

$link = mysqli_connect("localhost", "root", "", "store");
 

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 

$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$p_id = mysqli_real_escape_string($link, $_REQUEST['p_id']);
$rate = mysqli_real_escape_string($link, $_REQUEST['rate']);
$review = mysqli_real_escape_string($link, $_REQUEST['review']);

 
$sql = "INSERT INTO rating (name,  p_id, rate, review) VALUES ('$name', '$p_id', '$rate', '$review' )";
if(mysqli_query($link, $sql)){
   header('location: sucesstwo.php');
}else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 

mysqli_close($link);
?>