<?php

// Declare the class User
class User
{
    // deklarirajte public svojstvo name 
    public $name;

    // deklarirajte getter i setter metode za to svojstvo (za name)
    public function getName()
    {
        return $this->name;
    }

    public function setName($ime)
    {
        return $this->name = $ime;
    }
}

// napravite instancu klase
$noviUser = new User();

// pozovite deklarirane metode
$noviUser->setName('Luka');

// ispišite rezultat
echo $noviUser->getName();

