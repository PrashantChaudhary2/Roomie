<?php

session_start();
include("libs/functions.php");

$loggedUser = checkLoggedIn();

$sql = "INSERT INTO messages (senderProfileId, sentToProfileId, message) VALUES ('".$loggedUser["id"]."', '".$_POST["profileId"]."', '".$_POST["message"]."')";  

insert($sql);

header("location: messages.php?profileId=".$_POST["profileId"]."#bottom");

?>