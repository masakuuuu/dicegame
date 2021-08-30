<?php

namespace Myapp\Interfaces;

Interface DiceInterface
{
    public function setSided() :void;
    public function roll() :void;
    public function getNumber() :int;
}