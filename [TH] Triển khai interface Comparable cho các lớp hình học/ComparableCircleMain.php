<?php
include ("ComparableCircle.php");
$circle1 = new ComparableCircle("circleOne",8);
$circle2= new ComparableCircle("circleTwo",8);

echo $circle1->compareTo($circle2);