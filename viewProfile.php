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
        <h1>Viewing Profile</h1>
        
        <?php
            $sql = "SELECT 
            profiles.id, 
            profiles.fullName, 
            profiles.emailAddress, 
            profiles.bio, profiles.location,
            IF(profilelikes.id, 'true', 'false') as liked
            FROM profiles
            LEFT JOIN profilelikes ON 
                profilelikes.nProfilesId=".$loggedUser["id"]." AND profilelikes.nLikedProfilesId=profiles.id
            WHERE profiles.id=".$_GET["profileId"];
            
            $profile = selectOne($sql);

            $sql = "SELECT * FROM photos WHERE profilesId='".$_GET["profileId"]."'";
            $profilePhotos = select($sql);

            $sql= "SELECT photos.filepath,photos.description FROM photos WHERE profilesId='".$_GET["profileId"]."'";
            $photo= selectOne($sql);
        ?>

        <div class="profileWrapper">
            <div class="profileWrapperInner">
                <div class="profilePic">
                    <img src="assets/<?=$photo["filepath"]?>" alt="<?=$photo["description"]?>">
                </div>
                <h2><?=$profile["fullName"]?></h2>
                <div class="sectionConnect">
                    <p><i class="fas fa-map-marker-alt"></i> <?=$profile["location"]?></p>
                    <div class="connect">
                        <?php
                            if($profile["liked"]=="true"){
                                ?>
                                <a class="cta-secondary" href="saveLike.php?profileId=<?=$_GET["profileId"]?>&action=unlike"><i class="fas fa-minus"></i> Added</i></a>
                            <?php
                            } else {
                                ?>
                                <a class="cta-primary" href="saveLike.php?profileId=<?=$_GET["profileId"]?>&action=like"><i class="fas fa-plus"></i> Add</i></a>
                                <?php
                            }
                        ?>
                    </div>
                </div>
                <div class="sectionBio">
                    <h3>About me</h3>
                    <p><?=$profile["bio"]?></p>
                </div>
                <div class="sectionGallery">
                    <h3>Photos</h3>
                    <div class="gallery">
                        <?php
                            foreach($profilePhotos as $photo){
                                echo '<img src="assets/'.$photo["filepath"].'" alt="'.$photo["description"].'"/>';
                            }
                        ?>
                    </div>
                </div>
            </div>
                
                
            
        </div>
    </div>

</div>
    <?php   
        include("common/footer.php");
    ?>
