<?php
include_once("Circle.php");
include_once ("Resizeable.php");
$circle = new Circle(8);
echo $circle->radius."<br>";
$circle->setResize();
echo $circle->radius;