<?php include 'header.php';
// check if submitted correctly
if (isset($_POST['diceRoll1'])):{
    $diceArray = [];
    // once we know something has been submitted, we iterate on the POST to get all the submitted values (dices).
    foreach($_POST as $diceRoll => $value) {
        array_push($diceArray, $value);
      }
      $numberArray = [];
    foreach($diceArray as $value){
        // strip the D from the dices in the array, then transform string => integers
        // push them into a new array 
        $value = ltrim($value, 'D');
        $value = intval( $value );
        array_push($numberArray, $value);
    } 
    // results array that stores the randomized values
    $results = [];
    foreach($numberArray as $key => $value){
        array_push($results, rand(1, $value));
    }
        $sum = array_sum($results);
        echo "<div class='results'>Your total : $sum</div>";
    // for each Dice, shows the detail to the user
    foreach($diceArray as $key => $value){
        echo    "<div class='result-line-wrap'>
                    <p class='result-line-dice'>$value</p>
                    <p class='result-line-roll'>$results[$key]</p>
                </div>" ;
    }
}
endif;?>
<input id="refresh-btn" type="submit" value="Reroll !"/>
<form method="post" action="index.php"><input class="home-button" type="submit" value="Home"></form>
<script type="text/javascript" src="index.js"></script>