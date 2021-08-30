<?php

namespace Myapp\classes;

use Myapp\Interfaces\DiceInterface;
use Myapp\Classes\Dice;

// include_once("Dice.php");
// include_once("DiceInterface.php");

class DummyDice extends Dice implements DiceInterface
{
    public function __construct(){
    }

    public function setSided(): void{
        $this->sided = [6,6,6,6,6,6];
    }
}