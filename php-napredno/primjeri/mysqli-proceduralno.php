<?php

$dbhost = 'localhost:3306'; // Postavi host baze podataka
$korisnik = 'root'; // Postavi korisničko ime baze podataka
$lozinka = 'Larisa6533!'; // Postavi lozinku baze podataka
$baza = 'zaposlenici';
$konekcija;

// Kreiraj konekciju
try {
    $konekcija = mysqli_connect($dbhost, $korisnik, $lozinka, $baza);

    echo 'Uspješna konekcija na bazu podataka!';
    echo '<br>';
    $sqlUpit = 'SELECT ime, prezime FROM zaposlenici';

    $rezultati = mysqli_query($konekcija, $sqlUpit);

    if (mysqli_num_rows($rezultati) > 0) {
        while ($row = mysqli_fetch_assoc($rezultati)) {
            echo 'Ime: ' . $row['ime'] . ', Prezime: ' . $row['prezime'] . '<br>';
        }
    } else {
        echo 'Nema rezultata.';
    }


} catch (Exception $e) {
    echo 'Greška prilikom konekcije na bazu podataka: ' . $e->getMessage();
} finally {
    if ($konekcija) {
        mysqli_close($konekcija); // Zatvori konekciju ako je otvorena
    }
}