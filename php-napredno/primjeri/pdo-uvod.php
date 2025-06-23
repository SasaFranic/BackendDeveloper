<?php

$dbhost = 'localhost'; // Postavi host baze podataka
$korisnik = 'root'; // Postavi korisničko ime baze podataka
$lozinka = 'Larisa6533!'; // Postavi lozinku baze podataka
$baza = 'zaposlenici';

try {

    $pdo = new PDO("mysql:host={$dbhost};dbname={$baza}", $korisnik, $lozinka);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    $stmt = $pdo->prepare('SELECT * FROM zaposlenici');

    $stmt->execute();

    // dohvaćanje prvog zapisa
    $prviZapis = $stmt->fetch();
    foreach ($prviZapis as $key => $value) {
        echo $key . ' : ' . $value;
        echo '<br>';
    }




} catch (PDOException $e) {
    echo 'Greška prilikom povezivanja na bazu podataka: ' . $e->getMessage();



}



