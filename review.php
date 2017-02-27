<?php
    $players = array("Joe", "Peter", "Quagmire", "Cleaveland");
    $playerScores = array(0,0,0,0);
    $playerOne = array();
    $playerTwo = array();
    $playerThree = array();
    $playerFour = array();
    
    $suitArray = array("clubs","diamonds","hearts","spades");
    $deck = range(1, 52);
    shuffle($deck);
    
    function dealCard() {
        global $deck;
        $card = array_pop($deck);
        return $card;
        
    }
    
    function getHand(&$player) {
        $handTotal = 0;
        while ($handTotal <= 36) {
            $cardNum = dealCard();
            $cv = ($cardNum % 13) + 1;
            
            $handTotal += $cv;
            array_push($player, $cardNum);
        }
    }
    
    function displayHand($player, $playerNum) {
        global $playerScores;
        global $players;
        global $suitArray;
        $handTotal = 0;
        
        echo "<p>" . $players[$playerNum] . "</p>";
        foreach ($player as $vals) {
            $cardSuit = floor($vals / 13);
            $cv = ($vals % 13) + 1;
            
            $playerScores[$playerNum] += $cv;
            $handTotal += $cv;
            
            echo "<img src='imgs/cards/".$suitArray[$cardSuit]."/".$cv.".png'>";
        }
        
        echo "<p class='score'>" . $handTotal . "</p>";
    }
    
    function displayWinner() {
        global $players;
        global $playerScores;
        $winningScore = 0;
        $winningPlayer = "";
        
        if ($playerScores[0] > $winningScore && $playerScores[0] < 42) {
            $winningPlayer = $players[0];
            $winningScore = $playerScores[0];
        }
        if ($playerScores[1] > $winningScore && $playerScores[1] < 42) {
            $winningPlayer = $players[1];
            $winningScore = $playerScores[1];
        }
        if ($playerScores[2] > $winningScore && $playerScores[2] < 42) {
            $winningPlayer = $players[2];
            $winningScore = $playerScores[2];
        }
        if ($playerScores[3] > $winningScore && $playerScores[3] < 42) {
            $winningPlayer = $players[3];
            $winningScore = $playerScores[3];
        }
        
        echo "<br /><br /><h3 class='score'>" . $winningPlayer . " wins! </p>";
    }
    
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Silverjack </title>
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/styles.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
    </head>
    <body>
        <?=getHand($playerOne) ?>
        <?=getHand($playerTwo) ?>
        <?=getHand($playerThree) ?>
        <?=getHand($playerFour) ?>
        
        <div id="container">
            <h1>Silverjack</h1>
            <?=displayHand($playerOne, 0) ?>
            <?=displayHand($playerTwo, 1) ?>
            <?=displayHand($playerThree, 2) ?>
            <?=displayHand($playerFour, 3) ?>
            <?=displayWinner($playerOne, $playerTwo, $playerThree, $playerFour) ?>
        </div>
        
    </body>
</html>