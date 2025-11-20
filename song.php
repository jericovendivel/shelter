<?php 
$title = "Shelter";
$artist = "Madeon, Porter Robinson";
$mood = "Hopeful";

$nouns = ['way', 'life', 'home', 'shelter', 'words', 'names', 'faces'];
$verbs = ['find', 'tell', 'noticed', 'left'];
$adjectives = ['right', 'whole', 'long', 'alone', 'older'];

$verseCount = 2;
$repeatChorus = 2;

$verse1 = [
    "I could never  the right way to tell you",
    "Have you noticed I've been gone?",
    "'Cause I left behind the home that you made me",
    "But I will carry it along",
];
$chorus = [
    "And it's a long way forward, so trust in me",
    "I'll give them shelter like you've done for me",
    "And I know I'm not alone, you'll be watching over us",
    "Until you're gone"
];
$verse2 = [
    "When I′m older, I'll be silent beside you",
    "I know words won′t be enough",
    "And they won't need to know our names or our faces",
    "But they will carry on for us"
];
$outro = [
    "Oh, it′s a long way forward, trust in me",
    "I'll give them shelter like you′ve done for me",
    "And I know, I'm not alone, you′ll be watching over us",
    "Until..."
];

$typejuggling1 = "2" + 3;
$typejuggling2 = (int)"Number 1" * 2;

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Shelter</title>
        <style>
            body {
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                margin: 0;
                padding: 20px;
                min-height: 100vh;
            }

            .container {
                max-width: 800px;
                margin: 0 auto;
                background: white;
                padding: 40px;
                border-radius: 15px;
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            }

            h1 {
                color: #667eea;
                margin-top: 0;
                font-size: 2.5em;
                text-align: center;
            }

            h3 {
                color: #555;
                margin: 10px 0;
            }

            h4 {
                color: #764ba2;
                margin-top: 25px;
                margin-bottom: 10px;
                font-size: 1.3em;
            }

            p {
                line-height: 1.8;
                color: #333;
                font-size: 1.05em;
            }

            hr {
                border: none;
                border-top: 2px solid #e0e0e0;
                margin: 30px 0;
            }
        </style>
    </head>
    <body>
        <div class=container>
            <h1><?=$title ?></h1>
            <h3>by: <?=$artist?></h3>
            <h3>Mood: <?=$mood?></h3>
            <h3>Verse Count = <?=$verseCount?></h3>
            <h3>Chorus Repeat = <?=$repeatChorus?></h3>
            <hr>

            <!-- Verse 1 -->
            <h4>Verse 1</h4>
            <p><?=$verse1[0]?><br>
            <?=$verse1[1]?><br>
            <?=$verse1[2]?><br>
            <?=$verse1[3]?><br>
            </p>

            <!-- Chorus -->
            <h4>Chorus</h4>
            <p><?=$chorus[0]?><br>
            <?=$chorus[1]?><br>
            <?=$chorus[2]?><br>
            <?=$chorus[3]?><br>
            </p>

            <!-- Verse 2 -->
            <h4>Verse 2</h4>
            <p><?=$verse2[0]?><br>
            <?=$verse2[1]?><br>
            <?=$verse2[2]?><br>
            <?=$verse2[3]?><br>
            </p>

            <!-- Chorus -->
            <h4>Chorus</h4>
            <p><?=$chorus[0]?><br>
            <?=$chorus[1]?><br>
            <?=$chorus[2]?><br>
            <?=$chorus[3]?><br>
            </p>

            <!-- Outro -->
            <h4>Outro</h4>
            <p><?=$outro[0]?><br>
            <?=$outro[1]?><br>
            <?=$outro[2]?><br>
            <?=$outro[3]?><br>
            </p>

            <hr>
            <h3>Typejuggling sample</h3>
            <p>"2" + 3 = <?=$typejuggling1?></p>
            <p>(int)"Number 1" * 2 = <?=$typejuggling2?></p>
        </div>
    </body>
</html>

