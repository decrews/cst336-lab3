<?php
    $players = array("Joe", "Peter", "Quagmire", "Cleaveland");
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
        global $players;
        global $suitArray;
        $handTotal = 0;
        
        echo "<p>" . $players[$playerNum] . "</p>";
        foreach ($player as $vals) {
            $cardSuit = floor($vals / 13);
            $cv = ($vals % 13) + 1;
            $handTotal += $cv;
            
            echo "<img src='imgs/cards/".$suitArray[$cardSuit]."/".$cv.".png'>";
        }
        
        echo $handTotal;
    }
    
    function displayWinner() {
        
    }
    
    
    //echo "<img src='imgs/cards/".$suitArray[rand(0,3)]."/".rand(1,13).".png'>";
    // global variable: winnerName;  winnerScore;  associative_array ["person1", "person2", "person3", "person4"]; 
    // getHand();
    // displayHand(array(5, 15, 33, 22, 50));
    // displayWinners();
    
    /*
    function displayArray() {
        global $prices;
        foreach($prices as $price) {
            echo $price . "<br />";
        }
        echo "<hr>";
    }

    $prices = array(500, 300, 600, "hello", 1.2); // indexed array
    print_r($prices);
    array_push($prices, "new item");
    $prices[] = "one more item";
    
    echo "<br />";
    
    print_r($prices);
    
    echo "<br />";
    
    displayArray();
    
    unset($prices[1]);
    
    displayArray();
    
    $prices = array_values($prices); // Compress the array
    
    displayArray();
    
    sort($prices);
    displayArray();
    
    rsort($prices);
    displayArray();

    function associativeArrays() {
        $products = array("iPad Mini"=>300, "iPad Pro"=>800);
        $products["iPad Air"] = 500;
        
        echo $products[0];
        print_r($prodcuts);
        foreach($products as $product => $price) {
            echo $product . " " . $price . "<br />";
        }
    }
    
    associativeArrays();
    */
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Silverjack </title>
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
    <body>
        <?=getHand($playerOne) ?>
        <?=getHand($playerTwo) ?>
        <?=getHand($playerThree) ?>
        <?=getHand($playerFour) ?>
        
        <div id="wrapper">
            <h1>Silverjack</h1>
            <?=displayHand($playerOne, 0) ?>
            <?=displayHand($playerTwo, 1) ?>
            <?=displayHand($playerThree, 2) ?>
            <?=displayHand($playerFour, 3) ?>
        </div>
        
    </body>
</html>