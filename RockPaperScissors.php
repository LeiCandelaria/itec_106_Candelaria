<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rock_Paper_Scissors Game </title>
    <link rel="stylesheet" href="rckpaperscissor.css">
</head>
<body>
    <div class="gamebordr">
    <h1>Rock - Paper - Scissors</h1>
    <div class="playerchoices">
        <button onclick="playGame('rock')">👊</button>
        <button onclick="playGame('paper')">✋</button>
        <button onclick="playGame('scissors')">✌</button>
    </div>

    <div id="playerDisplay">PLAYER: </div>
    <div id="computerDisplay">COMPUTER: </div>
    <div id="resultDisplay"></div>

    <div class="scoreDisplay">Player Score: 
        <span id="playerScoreDisplay">0</span>
    </div>

    <div class="scoreDisplay">Computer Score: 
        <span id="computerScoreDisplay">0</span>
    </div>
    </div>

    <script src="ROCK_PAPER_SCISSORS.js"></script>
</body>
</html>