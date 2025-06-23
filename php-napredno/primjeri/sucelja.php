<?php

interface Auto
{
    public function kreni();
    public function stani();
}

interface SportskiAuto
{
    public function upaliTurbo();
    public function nagloZakoci();
}

class Yugo implements Auto
{
    public $boja;
    public $brojVrata;
    public $brzina;

    public function __constructor($boja, $brojVrata)
    {
        $this->boja = $boja;
        $this->brojVrata = $brojVrata;
    }

    public function kreni()
    {
        $this->brzina = 100;
    }

    public function stani()
    {
        $this->brzina = $this->brzina - 50;
    }
}

class Rimac implements Auto, SportskiAuto
{

    public $brzina;

    public function __construct()
    {
        $this->brzina = 0;
    }

    public function kreni()
    {
        $this->brzina = 150;
    }

    public function stani()
    {
        $this->brzina = $this->brzina - 50;
    }

    public function upaliTurbo()
    {
        $this->brzina = $this->brzina + 50;
    }

    public function nagloZakoci()
    {
        $this->brzina = 0;
    }
}

$yugo = new Yugo('crvena', 4);
$yugo->kreni();
echo $yugo->brzina;
echo "<br>";
$yugo->stani();
echo $yugo->brzina;
echo "<br>";
echo "<br>";
echo "<br>";


$rimac = new Rimac();
$rimac->kreni();
echo $rimac->brzina;
echo "<br>";
$rimac->stani();
echo $rimac->brzina;
echo "<br>";
$rimac->upaliTurbo();
echo $rimac->brzina;
echo "<br>";
$rimac->nagloZakoci();
echo $rimac->brzina;
echo "<br>";
echo "<br>";
