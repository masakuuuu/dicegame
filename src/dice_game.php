<?php

use Myapp\classes\Dice;
use Myapp\classes\DummyDice;
use Myapp\classes\DiceGameChecker;

require_once "vendor/autoload.php";

//$dice = new DummyDice();
$firstDice = new Dice();
$firstDice->setSided();
$firstDice->roll();

$secondDice = new Dice();
$secondDice->setSided();
$secondDice->roll();

$diceGemeChecker = new DiceGameChecker();
$diceGemeChecker->ready($firstDice, $secondDice);

echo match($diceGemeChecker->check()){
    0 => "引き分け",
    -1 => "１つ目のサイコロの勝ち",
    1 => "２つ目のさいころの勝ち",
} . "\n";


exit(1);