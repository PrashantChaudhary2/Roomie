<?php

session_start();
include("libs/functions.php");

if(selectOne("SELECT * FROM profiles WHERE emailAddress='".$_POST['emailAddress']."'"))
{
    header("location: register.php?error=userexists");
}

$sql = "INSERT INTO profiles (emailAddress, password, fullName) VALUES ('".$_POST['emailAddress']."', '".$_POST['password']."','".$_POST['fullname']."')";

$status = insert($sql);

if($status)
{
    $currentUser = selectOne("SELECT * FROM profiles WHERE emailAddress='".$_POST['emailAddress']."'");

    $_SESSION["profilesId"] = $currentUser["id"];

    header("location: listing.php");
} else {
    
    echo "something went wrong";
}

?>