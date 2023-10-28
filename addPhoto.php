<?php

session_start();
include("libs/functions.php");

$loggedUser = checkLoggedIn();

include("common/header.php");

?>
   
    <div class="wrapper" id="addPhoto">
        <?php
            include("common/nav.php");
            
        ?>
        <div class="contentWrapper">
        <h1>Edit Your Profile > Add A Photo</h1>
            <div class="profileWrapper container">
                <div class="profileWrapperInner">
                <div class="photos">
                    <h2>Photos</h2>
                    <form method="post" action="savePhoto.php" enctype="multipart/form-data">
                        <input type="text" name="description" placeholder="Description">
                        <input type="file" name="photo">
                        <input type="submit" class="cta-primary">
                    </form> 
                </div>
                    
                </div>
            </div>
        </div>
    </div>
    <?php 
        include("common/footer.php");
    ?>

