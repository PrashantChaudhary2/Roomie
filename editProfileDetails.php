<?php

session_start();
include("libs/functions.php");

$loggedUser = checkLoggedIn();

include("common/header.php");

?>
<link rel="stylesheet" type="text/css" href="css/form.css">

<div class="wrapper profileInfo">
    <?php
        include("common/nav.php");
        
    ?>
    <div class="contentWrapper">
        <div class="formWrapper">
            <h1>Edit Your Profile Information</h1>
            <?php
                if(isset($_GET["error"])){ echo '<p class="error">email address already registered</p>';}
            ?>
            <form method="post" action="saveProfileDetails.php">
                <div class="fieldset">
                    <label>Full Name</label>
                    <input type="text" name="fullName" value="<?=$loggedUser["fullName"]?>">
                </div>

                <div class="fieldset">
                    
                    <label>Gender</label>

                    <select name="genderId">
                    <option>Make a selection</option>
                        <?php
                        $genders = select("SELECT * FROM genders");
                        buildDropDown($genders, $loggedUser["genderId"]);
                        ?>
                    </select>
                </div>

                <div class="fieldset">
                    <label>Email Address</label>
                    <input type="text" name="emailAddress" value="<?=$loggedUser["emailAddress"]?>" />
                </div>

                <div class="fieldset">
                    <label>About You</label>
                    <div><textarea name="bio"><?=$loggedUser["bio"]?></textarea></div>
                </div>

                <div class="fieldset">
                    <label>Location</label>
                    <input type="text" name="location" value="<?=$loggedUser["location"]?>" />
                </div>

                <div class="fieldset">
                    <input type="submit" value="Update Profile" class="cta-primary" />
                </div>

            </form>
        </div>
    </div>
</div>
    

<?php
    include("common/footer.php");
?>
    
