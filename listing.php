<?php
session_start();
include("libs/functions.php");

$loggedUser = checkLoggedIn();

include("common/header.php");

?>

<div class="wrapper" id="listings">
    <?php
        include("common/nav.php");
        
    ?>
    
    <div class="contentWrapper">
    <div class="filter">
        <form method="get" action="listing.php">
            <select name="genderId">
            <option value="">Make a selection</option>
                <?php
                $_GET["genderId"] = (isset($_GET["genderId"])) ? $_GET["genderId"] : "";
                $genderoptions = select("SELECT * FROM genders");
                buildDropDown($genderoptions, $_GET["genderId"]);
                ?>
            </select>
            <input type="submit" value="Filter"/>
        </form>
    </div>

    <?php
        $filter = ($_GET["genderId"]) ? ' AND genderId="'.$_GET["genderId"].'"' : "";
            
        $profiles = select('SELECT profiles
            .id,
            profiles.fullName,profiles.location,
            (
                SELECT
                    photos.filepath
                FROM
                    photos
                WHERE
                    photos.profilesId = profiles.id
                LIMIT 0,
                1
                ) AS photoPath
        FROM profiles
        WHERE id!="'.$loggedUser["id"].'" '.$filter.'');

        if($profiles){
        foreach($profiles as $profile)
        {
            /// set the default.jpg if no photo was set in the db
            $profile["photoPath"] = ($profile["photoPath"]) ? $profile["photoPath"] : "default.jpg";

            echo '
                <div class="profileCard">
                    <div class="photos">
                        <img src="assets/'.$profile["photoPath"].'" alt=""/>
                    </div>
                    <div class="name">
                        <h3>'.$profile["fullName"].'</h3>
                        <p><i class="fas fa-map-marker-alt"></i> '.$profile["location"].'</p>
                        <a class="cta-secondary" href="viewProfile.php?profileId='.$profile["id"].'">View Profile</a>
                    </div>
                </div>
                ';
        }
        } else {
            echo "<p>No person matches your filter.</p>";
        }
        ?>
    </div>

    </div>
    

    <?php
        include("common/footer.php");
    ?>
    
