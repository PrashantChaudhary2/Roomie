<?php

session_start();
include("libs/functions.php");

$loggedUser = checkLoggedIn();

include("common/header.php");

?>

   
<div class="wrapper" id="messageWrap">
    <?php
        include("common/nav.php");
        
    ?>
        <div class="contentWrapper">
            <h1>Messages</h1>
            <div class="profileWrapper">
                
                <div id="messageContainer">
                    <?php
                    $sql ='SELECT 
                    messages.id, 
                    messages.senderProfileId,
                    messages.sentToProfileId,
                    messages.message,
                    IF(messages.senderProfileId='.$loggedUser["id"].', "sent", "received") as toggle
                    FROM messages
                    WHERE (senderProfileId='.$loggedUser["id"].' and sentToProfileId='.$_GET["profileId"].') or (senderProfileId='.$_GET["profileId"].' and sentToProfileId='.$loggedUser["id"].')';

                    // give me back an array of all messages
                    $messageArray = select($sql);

                    foreach($messageArray as $message)
                    {
                    ?>
                    <div class="message <?=$message["toggle"]?>">
                        <p><?=$message["message"]?></p>
                    </div>
                    <?php
                    }
                    ?>

                </div>

                <div id="bottom"></div>

                <div class="messageCreation">
                    <form method="post" action="saveMessage.php" id="messageCreationForm">
                        <input type="hidden" name="profileId" value="<?=$_GET["profileId"]?>"/>
                        <textarea name="message" id="theMessage"></textarea>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
    let messageForm = document.getElementById("theMessage");

    messageForm.addEventListener("keyup", function(e){
        if(e.code == "Enter")
        {
            let messageCreationForm = document.getElementById("messageCreationForm");
            messageCreationForm.submit();
        }
    })

    </script>
</body>
</html>