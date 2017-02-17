<?php

    function displayRandomImage() {
        echo "<img src='imgs/cards/clubs/".rand(1,13).".png'>";
    }
    
    function dealCard() {
        $suitArray = array("clubs","diamonds","hearts","spades");
        echo "<img src='imgs/cards/".$suitArray[rand(0,3)]."/".rand(1,13).".png'>";
        
        $deck = range(1, 52);
        shuffle($deck);
        print_r($deck);
        $card = array_pop($deck);
        echo "popped: " . $card;
        
    }
    
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
    </head>
    <body>
        <h1>Silverjack</h1>
        <?=dealCard() ?>
    </body>
</html>