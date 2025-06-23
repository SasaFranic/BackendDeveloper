<?php

// Interface za Sir
interface Sir
{
    public function kuhaj();
    public function cijedi();
    public function suši();
}

// Prva vrsta sira – Gauda
class Gauda implements Sir
{
    public function kuhaj()
    {
        echo "Gauda se kuha 60 minuta.\n";
    }

    public function cijedi()
    {
        echo "Gauda se cijedi 45 minuta.\n";
    }

    public function suši()
    {
        echo "Gauda se suši 7 dana.\n";
    }
}

// Druga vrsta sira – Mozzarella
class Mozzarella implements Sir
{
    public function kuhaj()
    {
        echo "Mozzarella se kuha 30 minuta.\n";
    }

    public function cijedi()
    {
        echo "Mozzarella se cijedi 20 minuta.\n";
    }

    public function suši()
    {
        echo "Mozzarella se ne suši, koristi se svježa.\n";
    }
}

// Treća vrsta sira – Parmezan
class Parmezan implements Sir
{
    public function kuhaj()
    {
        echo "Parmezan se kuha 90 minuta.\n";
    }

    public function cijedi()
    {
        echo "Parmezan se cijedi 60 minuta.\n";
    }

    public function suši()
    {
        echo "Parmezan se suši 12 mjeseci.\n";
    }
}

// Tvornica sireva
class SirFactory
{
    public static function create($tip)
    {
        switch (strtolower($tip)) {
            case 'gauda':
                return new Gauda();
            case 'mozzarella':
                return new Mozzarella();
            case 'parmezan':
                return new Parmezan();
            default:
                throw new Exception("Nepoznat tip sira: $tip");
        }
    }
}

// Stvaranje objekata pomoću tvornice
$sir1 = SirFactory::create('Gauda');
$sir2 = SirFactory::create('Mozzarella');
$sir3 = SirFactory::create('Parmezan');

// Pozivanje metoda za svaki sir
echo "--- Gauda ---\n";
$sir1->kuhaj();
$sir1->cijedi();
$sir1->suši();

echo "\n--- Mozzarella ---\n";
$sir2->kuhaj();
$sir2->cijedi();
$sir2->suši();

echo "\n--- Parmezan ---\n";
$sir3->kuhaj();
$sir3->cijedi();
$sir3->suši();
