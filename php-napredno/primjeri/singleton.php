<?php

// stvorite singleton klasu
// sprječite stvaranje novih instanci kroz metode koje to omogućuju
// dodajte static svojstvo koje će pratiti stanje instance
// napravite public metodu za kreiranje/vraćanje instance
// u konstruktoru ispišite nešto
// stvorite 3 instance i vidite ispis na ekranu

class Singleton
{
    private static $instance = null;

    // Privatni konstruktor sprječava stvaranje novih instanci
    private function __construct()
    {
        echo "Stvorena nova instanca Singleton klase.<br>";

    }

    // Metoda za dobivanje instance
    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new Singleton();
        }
        return self::$instance;
    }

    // sprječite stvaranje novih instanci kroz metode koje to omogućuju
    private function __clone()
    {
        // Sprječava kloniranje instance
    }

    private function __wakeup()
    {
        // Sprječava deserializaciju instance
    }

    // dodajte static svojstvo koje će pratiti stanje instance
    private static $state = null;

    public static function setState($state)
    {
        self::$state = $state;
    }
    // napravite public metodu za kreiranje/vraćanje instance
    public static function getInstanceState()
    {
        return self::$state;
    }

    // u konstruktoru ispišite nešto

    public function displayMessage()
    {
        echo 'Singleton klasa.<br>';
    }

    // stvorite 3 instance i vidite ispis na ekranu
    public static function createInstances()
    {
        $instance1 = self::getInstance();
        $instance1->displayMessage();

        $instance2 = self::getInstance();
        $instance2->displayMessage();

        $instance3 = self::getInstance();
        $instance3->displayMessage();
    }

}
