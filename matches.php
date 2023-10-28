<?php

session_start();
include("libs/functions.php");

$loggedUser = checkLoggedIn();

include("common/header.php");

?>

   
    <div class="wrapper">
        <?php
            include("common/nav.php");
            
        ?>
        <div class="contentWrapper">
        <h1>Your Matches</h1>
            <div class="profileWrapper container">
                <div class="profileWrapperInner">
                    <?php
                    $sql ='SELECT profiles.* 
                    FROM profilelikes 
                    LEFT JOIN profiles ON (profiles.id=profilelikes.nLikedProfilesId)
                    WHERE profilelikes.nProfilesId="'.$loggedUser["id"].'" AND profilelikes.bMatched=1';

                    $profiles = select($sql);

                    if($profiles){
                        foreach($profiles as $profile)
                        {
                            
                            echo '
                                <div class="profileCard">
                                
                                    <div class="name">
                                        <h1>'.$profile["fullName"].'</h1>
                                        <a href="viewProfile.php?profileId='.$profile["id"].'">View Profile</a> 
                                        <a href="messages.php?profileId='.$profile["id"].'#bottom">Messages</a>
                                    </div>
                                </div>
                                ';
                        }
                    } else {
                        echo "<p>No Matches</p>";
                    }

                    ?>
                    
                </div>
            </div>
        </div>
    </div>
    <?php
        include("common/footer.php");
    ?>





