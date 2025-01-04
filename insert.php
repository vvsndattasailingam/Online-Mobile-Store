<?php

$link = mysqli_connect("localhost", "root", "", "store");
 

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 

$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$contact = mysqli_real_escape_string($link, $_REQUEST['contact']);
$category = mysqli_real_escape_string($link, $_REQUEST['category']);
$comment = mysqli_real_escape_string($link, $_REQUEST['comment']);
 

$sql = "INSERT INTO feedback (name,  email, contact, category,  comment) VALUES ('$name', '$email',  '$contact',  '$category', '$comment' )";
if(mysqli_query($link, $sql)){
   header('location: sucessone.php');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 

mysqli_close($link);
?>