<?php

namespace Myapp\Classes;

use Myapp\Interfaces\DiceInterface as DiceInterface;

// require_once "../vendor/autoload.php";
// include_once("DiceInterface.php");

class Dice implements DiceInterface {
    protected array $sided;
    protected int $number;

    public function __construct (){
    }

    public function setSided() :void{
        $this->sided = [1,2,3,4,5,6];
    }

    public function getSided() :array{
        return $this->sided;
    }

    public function roll() :void{
        $this->number = $this->sided[array_rand($this->sided)];
    }

    public function getNumber() :int{
        return $this->number;
    }
}