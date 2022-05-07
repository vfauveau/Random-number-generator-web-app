<?php if (isset($_POST['SubmitButton'])):{ 
$numberOfDice = $_POST["numberOfDice"];
include 'header.php';?>
<form class="dice-form" name="diceroll" action="diceroll.php" method="post">
    <?php for($i = 1; $i <= $numberOfDice; $i++){
    $currentI = $i;
    $selectorNumber = "diceRoll".strval($currentI);
    echo '<select name="' . $selectorNumber . '"">
    <option value="D4">D4</option>
    <option value="D6">D6</option>
    <option value="D8">D8</option>
    <option value="D10">D10</option>
    <option value="D12">D12</option>
    <option value="D20">D20</option>
    <option value="D100">D100</option>
    </select>' ;}}?>
    <input class="roll-button" type="submit" value="Let's roll !" />
</form>
<?php else : {
    include 'header.php';
echo '<h1>Welcome to the random number generator</h1>
<form action="" method="POST" name="numberOfDice">
    <p>Please choose a number of dice</p>
    <input required name="numberOfDice" type="number" min="1">
    <br>
    <input class="home-button" type="submit" value="Submit" name="SubmitButton">
</form>';
;};?>
<?php endif; ?>