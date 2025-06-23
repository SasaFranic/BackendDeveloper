<?php

abstract class Auto
{
    protected $volumenTanka;

    public function setVolumenTanka($volumen)
    {
        $this->volumenTanka = $volumen;
    }

    abstract public function izracunajMaksimalnuDistancu();

    abstract public function ispisiNacinPaljenja();
    // Ova metoda je apstraktna i mora biti implementirana u podklasama

}

class Rimac extends Auto
{
    public function izracunajMaksimalnuDistancu()
    {
        return $this->volumenTanka * 100; // Pretpostavljamo da auto troši 1 litru na 100 km
    }

    public function ispisiNacinPaljenja()
    {
        echo 'klik gumba';
        // Ova metoda implementira način paljenja za Rimac auto
    }
}

class Yugo extends Auto
{
    public function izracunajMaksimalnuDistancu()
    {
        return $this->volumenTanka * 10; // Pretpostavljamo da Yugo troši 10 litara na 100 km
    }

    public function ispisiNacinPaljenja()
    {
        echo 'stavi i okreni ključ';
        // Ova metoda implementira način paljenja za Yugo auto
    }


}

$rimac = new Rimac();
$rimac->setVolumenTanka(50); // Postavljamo volumen tanka na 50 litara

echo $rimac->izracunajMaksimalnuDistancu(); // Ispisuje maksimalnu udaljenost koju auto može prijeći
// Ispis: 5000  // (50 litara * 100 km/litru)
// Ovaj primjer pokazuje kako se koristi apstraktna klasa Auto i konkretna klasa Rimac koja je nasljeđuje.
echo $rimac->ispisiNacinPaljenja(); // Ispisuje način paljenja Rimac autom
// Ispis: klik gumba



$yugo = new Yugo;
$yugo->setVolumenTanka(40); // Postavljamo volumen tanka na 40 litara

echo $yugo->izracunajMaksimalnuDistancu(); // Ispisuje maksimalnu udaljenost koju Yugo može prijeći
// Ispis: 400  // (40 litara * 10 km/litru)
echo $yugo->ispisiNacinPaljenja(); // Ispisuje način paljenja Yugo autom
// Ispis: stavi i okreni ključ  
