<?php

namespace Myapp\classes;

use Myapp\Interfaces\DiceInterface;
use Myapp\Classes\Dice;

class DummyDice extends Dice implements DiceInterface
{
    public function __construct(){
    }

    public function setSided(): void{
        $this->sided = [6,6,6,6,6,6];
    }
}