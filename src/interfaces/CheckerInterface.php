<?php

namespace Myapp\Interfaces;

interface CheckerInterface
{
    public function ready(DiceInterface $firstDice, DiceInterface $secondDice);
    public function check();
}
