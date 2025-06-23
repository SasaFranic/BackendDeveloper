<?php
// prema psr-4 standardu, autoloader je funkcija koja se poziva kada PHP ne može pronaći klasu koju pokušavamo koristiti
spl_autoload_register(function ($className) {
    // putanja do direktorija gdje se trenutno nalazimo
    $pocetniDirektorij = __DIR__ . '/src/';

    // odabiremo relativnu putanju do klase
    $putanjaDoKlase = str_replace('\\', '/', $className);

    $putanjaDoFilea = $pocetniDirektorij . $putanjaDoKlase . '.php';

    //odraditit ćemo provjeru da li datoteka postoji
    if (file_exists($putanjaDoFilea)) {
        // ako postoji, uključujemo je
        require_once $putanjaDoFilea;
    } else {
        // ako ne postoji, bacamo iznimku
        throw new Exception("Klasa $className nije pronađena u $putanjaDoFilea");
    }

});