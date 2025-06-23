<?php

// Declare the class
class Car
{
    //Svojstva (properties)
    public $comp;
    public $color = 'biege';
    public $hasSunRoof = true;

    private $mjenjac;
    protected $brzina;



    // Metode (methods)
    public function showProps()
    {
        return $this->comp . ' ' . $this->color . ' ' . $this->hasSunRoof;
    }

    public function getMjenjac()
    {
        return $this->mjenjac;
    }

    public function setMjenjac($mjenjac)
    {
        $this->mjenjac = $mjenjac;
    }
}


//Kreirajmo objekt klase Car (instancu)
$bmw = new Car();
$mercedes = new Car();

$bmw->comp = 'BMW';
$mercedes->comp = 'Mercedes';

// $bmw->mjenjac = 'manual'; - ne raadi jer je mjenjac privatno svojstvo
// $mercedes->mjenjac = 'automatic'; - ne radi jer je mjenjac privatno svojstvo

// echo $bmw->mjenjac; // Ovo neće raditi jer je mjenjac privatno svojstvo
// echo $mercedes->mjenjac; // Ovo neće raditi jer je mjenjac privatno svojstvo

// Postavljanje vrijednosti privatnog svojstva preko metode
$bmw->setMjenjac('manual');
$mercedes->setMjenjac('automatic');

// Pristupanje privatnom svojstvu preko metode
echo $bmw->getMjenjac() . '<br>'; // Ovo će raditi jer koristimo getter
echo $mercedes->getMjenjac() . '<br>'; // Ovo će raditi jer koristimo getter

$bmw->color = 'black';
$mercedes->color = 'white';

// Pristupanje svojstvima objekta
echo 'BMW AUTO COMAPNY: ' . $bmw->comp . '<br>';
echo 'MERCEDES AUTO COMAPNY: ' . $mercedes->comp . '<br>';

echo 'BMW AUTO COLOR: ' . $bmw->color . '<br>';
echo 'MERCEDES AUTO COLOR: ' . $mercedes->color . '<br>';

class SportsCar extends Car
{
    private $turbo = true;

    public function getBrzina()
    {
        return $this->brzina;
    }

    public function setBrzina($broj)
    {
        return $this->brzina = $broj;
    }

}

// Kreirajmo objekt klase SportsCar
echo '<br>';
echo '<hr>';
echo '<h1> SPORTS CAR CLASS</h1>';
echo '<br>';

$sportsCar = new SportsCar();
$sportsCar->setBrzina(100);
$sportsCar->setMjenjac('automatic');
echo $sportsCar->getMjenjac() . '<br>'; // Ovo će raditi jer koristimo getter
echo $sportsCar->getBrzina() . '<br>';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <P><?php echo $bmw->showProps(); ?></P>
    <P><?php echo $mercedes->showProps(); ?></P>
    <p>Ovo je primjer klase i objekata u PHP-u.</p>

</body>

</html>