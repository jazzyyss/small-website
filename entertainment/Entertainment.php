<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BattleArena</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Acme">
    <link rel="stylesheet" href="style.css">
    <script src="js/gamemanager.js"></script>
    <script src="js/player.js"></script>
    <script src="js/enemy.js"></script>
</head>

<body>
    <div class="btn"><a href="../"><img src="img/home.jpg" alt="H"></a></div>
    <div class="header">
        <p>Welcome to Arena!</p>
        <h2>Chose your character</h2>
    </div>
    <div class="interface">
        <a href="#" onclick="GameManager.setGameStart('Warrior')">
            <img src="img/avatar-player/warrior.png" alt="warrior">
            <div>
                <h3>Warrior</h3>
                <p>Warriors have higher health and stamina, however their strength also makes them slower and clumsier.</p>
            </div>
        </a>
        <a href="#" onclick="GameManager.setGameStart('Rouge')">
            <img src="img/avatar-player/rouge.png" alt="Rouge">
            <div>
                <h3>Rouge</h3>
                <p>Rouges are fast and have high stamina and speed which makes up for their lack in strength and health.</p>
            </div>
        </a>
        <a href="#" onclick="GameManager.setGameStart('Mage')">
            <img src="img/avatar-player/mage.png" alt="Mage">
            <div>
                <h3>mage</h3>
                <p>Mages are glass canons which put all their effort into spells.This means they slack on everything else.</p>
            </div>
        </a>
        <a href="#" onclick="GameManager.setGameStart('Hunter')">
            <img src="img/avatar-player/hunter.png" alt="Hunter">
            <div>
                <h3>Hunter</h3>
                <p>Hunters are well rounded warriors that focus on evening out their skills.No strengths or weaknesses.</p>
            </div>
        </a>
    </div>
    <div class="actions">

    </div>
    <div class="actions">

    </div>
    <div class="arena">

    </div>
    <div class="enemy">

    </div>

</body>

</html>