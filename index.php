<?php if (isset($_POST['SubmitButton'])):{ 
$numberOfDice = $_POST["numberOfDice"];
include 'header.php';?>
<form name="diceroll" action="diceroll.php" method="post">
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
    <input type="submit" value="GO" />
</form>
<?php else : {
    include 'header.php';
echo '<form action="" method="POST" name="numberOfDice"><input required name="numberOfDice" type="number" min="1">
<input class="home-button" type="submit" name="SubmitButton"></form>';
;};?>
<?php endif; ?>