<?php

session_start();
include("libs/functions.php");

$loggedUser = checkLoggedIn();

if($_GET["action"]=="like"){

    $sql = "SELECT * FROM profilelikes WHERE nProfilesId='".$_GET["profileId"]."' AND nLikedProfilesId='".$loggedUser["id"]."'";

    $arrLikedMe = selectOne($sql);

    $matched = ($arrLikedMe) ? 1 : 0;

    $sql = "INSERT INTO profilelikes (nProfilesId, nLikedProfilesId, bMatched) VALUES ('".$loggedUser["id"]."', '".$_GET["profileId"]."', '".$matched."' )";

    insert($sql);

    if ($arrLikedMe)
    {
        $sql = "UPDATE profilelikes SET bMatched=1 WHERE id='".$arrLikedMe["id"]."'";
        update($sql);
    }
} else {

    $sql ="DELETE FROM profilelikes WHERE nProfilesId='".$loggedUser["id"]."' AND nLikedProfilesId='".$_GET["profileId"]."'";

    delete($sql);

}

header("location: viewProfile.php?profileId=".$_GET["profileId"]);

?>