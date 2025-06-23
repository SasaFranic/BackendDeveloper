<?php

$dbhost = 'localhost:3306'; // Postavi host baze podataka
$korisnik = 'root'; // Postavi korisničko ime baze podataka
$lozinka = 'Larisa6533!'; // Postavi lozinku baze podataka
$baza = 'zaposlenici';

$mysqli = new mysqli($dbhost, $korisnik, $lozinka, $baza);

if (mysqli_connect_errno()) {
    echo 'Greška prilikom konekcije na bazu podataka: ' . mysqli_connect_error();
    exit();
}


$mysqli->autocommit(FALSE); // Pokreni transakciju

$mysqli->query("INSERT INTO place (iznos) VALUES (5000)");
$mysqli->query("INSERT INTO place (iznos) VALUES (5500)");

$mysqli->commit(); // Potvrdi transakciju

$mysqli->autocommit(TRUE); // Vraćanje na automatski commit
$mysqli->close(); // Zatvori konekciju
echo 'Uspješna transakcija!';


