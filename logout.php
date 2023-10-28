<?php
session_start();

    // removing/unsetting the variable
    unset($_SESSION["profilesId"]);

    //redirect to login page since user not logged in
    header("location: index.php");
?>