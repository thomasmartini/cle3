<!DOCTYPE html>
<?php
require_once "backend.php"
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Main</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="main.css">
</head>
<body>
<div class="flex-container-main">
    <section class="info">
        U kijkt nu naar:<br>(show)<br><br>
        Als er meer dan de helft van de mensen op een van de knoppen drukt dan wordt er een geluid afgespeeld
    </section>
    <section class="likeButtons">
        <img src="img/clapping-hand-emoji-noto-fonts-applause-hand-emoji-8ef6cd92ddfc85862825531d575afa35.png"
             height="300" width="300"/>
        <img src="img/emoji-mask-big-laugh-emoticon.jpg" height="300" width="400"/>
        <img src="img/pngegg.png" height="300" width="300"/>
    </section>
    <section class="chat">
        <div class="chatMessages">
            bla bla bla
        </div>
        <div class="chatInput">
            <input type="text" id="chatMessage" name="chatMessage" placeholder="Type hier uw bericht">
            <input type="submit" value="Verstuur">
        </div>
    </section>
</div>
</body>
</html>