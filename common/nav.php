<header>
    <div id="navFlyout" class="flyouts">
        <div class="navigation">
            <div class="items">
                <div class="logo">
                    <img src="assets/logo.png" alt="Roomie logo">
                </div>
                <ul>
                    <li class="profileInfoText">
                        Welcome back <strong><?=$loggedUser["fullName"]?></strong>
                    </li>
                    <li>
                        <a href="listing.php">Home</a>
                    </li>
                    <li>
                        <a href="#">Profile</a>
                        <ul>
                            <li><a href="editPhotos.php">Edit Photos</a></li>
                            <li><a href="editProfileDetails.php">Edit Profile Details</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="matches.php">Matches</a>
                    </li>
                    <li>
                        <a href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
