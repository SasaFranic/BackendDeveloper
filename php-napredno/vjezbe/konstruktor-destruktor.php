<?php

class Korisnik
{
    private $ime;

    // Konstruktor klase
    // Konstruktor se automatski poziva prilikom kreiranja nove instance klase
    public function __construct($ime)
    {
        $this->ime = $ime;
        echo 'Konstruktor pokrenut. <br>';
    }
    // Metoda za postavljanje imena
    public function getIme()
    {
        return $this->ime;
    }
}
// Kreiranje nove instance klase Ime
$noviKorisnik = new Korisnik('Saša');
// Ispis imena korisnika
echo $noviKorisnik->getIme();