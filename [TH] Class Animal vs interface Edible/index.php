<?php
include_once ("Tiger.php");
include_once ("Chicken.php");
include_once ("Apple.php");
$testTiger =new Tiger();
$testChicken = new Chicken();
echo $testTiger->makeSound()."<br>";
echo $testChicken->makeSound()."<br>";
echo $testChicken->howToEat()."<br>";
$testApple = new Apple();
echo $testApple->howToEat()."<br>";