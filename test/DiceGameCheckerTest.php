<?php
include_once("./src/DiceInterface.php");
include_once("./src/CheckerInterface.php");
include_once("./src/DiceGameChecker.php");

use PHPUnit\Framework\TestCase;

class DiceGameCheckerTest extends TestCase
{
    protected CheckerInterface $diceGameChecker;

    protected function setUp() :void{
        $this->diceGameChecker = new DiceGameChecker();
    }

    public function testInstanceOf() {
        $this->assertInstanceOf(DiceGameChecker::class, $this->diceGameChecker);
    }

    public function testEmpty(){
        $this->assertTrue(empty($this->diceGameChecker->firstDiceNumber));
        $this->assertTrue(empty($this->diceGameChecker->secondDiceNumber));
    }

    // 勝敗確認テスト
    public function testSided(){
        $this->assertContains(6, $this->dice->getSided());

        return $this->dice;
    }

    /**
     * @depends testSided
     */
    public function testRoll($dice){
        $dice->roll();
        $this->assertTrue(1 <= $dice->getNumber());
        $this->assertTrue(6 >= $dice->getNumber());
    }
}

