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
    <h1>Edit Your Profile Photos</h1>
        <div class="profileWrapper container">
            <div class="profileWrapperInner">
                <div class="photos">
                    <h2>Photos</h2>
                    <?php

                        $arrPhotos = select("SELECT * FROM photos WHERE profilesId='".$loggedUser["id"]."'");

                        foreach($arrPhotos as $photo){
                            echo '<img src="assets/'.$photo["filepath"].'"/>';
                        }
                    ?>
                        
                    
                </div>
                <a href="addPhoto.php" class="cta-secondary">+ add photo</a>
            </div>
        </div>
    </div>
</div>
<?php
        include("common/footer.php");
    ?>