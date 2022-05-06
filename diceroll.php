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
        echo "<div class='results'>Your dice roll total is : $sum</div>";
    // for each Dice, shows the detail to the user
    foreach($diceArray as $key => $value){
        echo "<div>$value $results[$key]</div>" ;
    }
}
endif;?>
<form method="post" action="index.php"><input class="home-button" type="submit" value="Home"></form>