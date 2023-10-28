<?php

session_start();
include("libs/functions.php");

checkLoggedIn();

//upload file to the server
move_uploaded_file($_FILES["photo"]["tmp_name"], "assets/".$_FILES["photo"]["name"]);

insert("INSERT INTO photos (profilesId, filepath, description) VALUES ('".$_SESSION['profilesId']."', '".$_FILES["photo"]["name"]."', '".$_POST["description"]."')");

header("location: editPhotos.php");

?>