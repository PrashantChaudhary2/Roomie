<?php

session_start();
include("libs/functions.php");

$loggedUser = checkLoggedIn();


update("UPDATE profiles SET fullName='".$_POST["fullName"]."', genderId='".$_POST["genderId"]."', emailAddress='".$_POST["emailAddress"]."', bio='".$_POST["bio"]."', location ='".$_POST["location"]."' WHERE id='".$loggedUser["id"]."' ");

header("location: listing.php");

?>