<?php

include_once 'Math/Constants.php';
include_once 'Math/Geometry/Circle.php';

// bez use
$circle = new \Math\Geometry\Circle(7);

echo $circle->getDiameter();
echo '<br>';
echo $circle->getArea();
echo '<br>';
echo $circle->getCircumference();
echo '<br>';
echo '<br>';


// koristeći use
use Math\Geometry\Circle;

$circle2 = new Circle(5);

echo $circle2->getDiameter();
echo '<br>';
echo $circle2->getArea();
echo '<br>';
echo $circle2->getCircumference();
echo '<br>';
echo '<br>';

// koristeći alias
use Math\Geometry\Circle as C;

$circle3 = new C(10);
echo $circle3->getDiameter();
echo '<br>';
echo $circle3->getArea();
echo '<br>';
echo $circle3->getCircumference();
echo '<br>';

