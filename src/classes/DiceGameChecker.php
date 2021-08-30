<?php

namespace Myapp\Classes;

use Myapp\Interfaces\CheckerInterface;
use Myapp\Interfaces\DiceInterface;

class DiceGameChecker implements CheckerInterface
{
    protected int $firstDiceNumber;
    protected int $secondDiceNumber;

    public function __construct(){
    }

    public function ready(DiceInterface $firstDice, DiceInterface $secondDice) :void{
        $this->firstDiceNumber = $firstDice->getNumber();
        $this->secondDiceNumber = $secondDice->getNumber();
    }

    public function check() :int{
        // 引き分け
        if ($this->firstDiceNumber === $this->secondDiceNumber){
            return 0;
        }

        if ($this->firstDiceNumber > $this->secondDiceNumber){
            return 1;
        } else {
            return 2;
        }
    }
}