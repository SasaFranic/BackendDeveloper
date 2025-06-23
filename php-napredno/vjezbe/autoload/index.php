<?php

include 'autoload.php';

use Fruits\Apple;
use Fruits\Banana;
use Fruits\Orange;

$apple = new Apple();
$banana = new Banana();
$orange = new Orange();

echo $apple->fruit;
echo '<br>';
echo $banana->fruit;
echo '<br>';
echo $orange->fruit;
echo '<br>';
