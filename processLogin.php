<?php
session_start();
include("libs/functions.php");

// checking if user exists
$sql = "SELECT * FROM profiles WHERE emailAddress='".$_POST["emailAddress"]."' AND password='".$_POST["password"]."'";

$user = selectOne($sql);

if($user){
   
    //save user profile id in session
    $_SESSION["profilesId"] = $user["id"]; 
    header("location: listing.php");
    
} else {
   //take to login page since error occured
    header("location: index.php?error=1"); 
    
}
?>