<?php

class Zaposlenik
{
    public $ime;
    public $prezime;

    public function __construct()
    {
        echo 'Konstruktor pokrenut. <br>';
    }

    public function setIme()
    {
        $this->ime = 'Franjo';
    }

    public function getIme()
    {
        return $this->ime;
    }

    //public function __destruct()
    // {
    //     echo '<br>';
    //    echo 'Destruktor pokrenut. <br>';
    // }
}

$franjo = new Zaposlenik();
$franjo->setIme();

// unset($franjo);

echo $franjo->getIme();