# dicegame

## 日本語

6面体のサイコロをPHPのプログラムで実装

* 実装内容
  * 6つ面を持っている
  * １から６までの数字を１つずつ持っている
  * サイコロを振ることでサイコロが持ついずれかの数字を得る

## English

Implementing 6-sided dice in a PHP program

* Implementation details
  * Has six faces
  * Has one number from 1 to 6
  * Roll the dice to get one of the numbers the dice have

## Use

```php=
$dice = new Dice();
$dice->setSided();
$dice->roll();
$dice->getSide();
```

## PHPUnit 実行

```
vendor/phpunit/phpunit/phpunit test/DiceTest.php
```