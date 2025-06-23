<?php

// napravite jedno sucelje Zivotinja

interface Zivotinja
{
    public function jede();
    public function spava();
}

// napravite klasu koja implementira sucelje
class Pas implements Zivotinja
{
    public function jede()
    {
        echo "Pas jede.\n";
    }

    public function spava()
    {
        echo "Pas spava.\n";
    }
}

// pozovite i ispišite rezultat implementirane metode
$pas = new Pas();
$pas->jede(); // Ispisuje: Pas jede.
$pas->spava(); // Ispisuje: Pas spava.

