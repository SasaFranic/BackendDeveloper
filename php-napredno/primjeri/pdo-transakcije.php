<?php


$dbhost = 'localhost'; // Postavi host baze podataka
$korisnik = 'root'; // Postavi korisničko ime baze podataka
$lozinka = 'Larisa6533!'; // Postavi lozinku baze podataka
$baza = 'zaposlenici';

// maknuto iz try-catch bloka radi jednostavnijeg čitanja koda
$pdo = new PDO("mysql:host={$dbhost};dbname={$baza}", $korisnik, $lozinka);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

try {
    // Pokretanje transakcije
    $pdo->beginTransaction();

    // kod transakcije
    $preparedStatement = $pdo->prepare('INSERT INTO odjeli (naziv) VALUES (:naziv)');

    $preparedStatement->execute([':naziv' => "Marketing"]);

    echo 'Last inserted ID za Marketing:' . $pdo->lastInsertId();
    echo '<br>';


    $preparedStatement->execute([':naziv' => "Financije"]);

    echo 'Last inserted ID za Financije:' . $pdo->lastInsertId();
    echo '<br>';


    $preparedStatement->execute([':naziv' => "Računovodsvto"]);

    echo 'Last inserted ID za Računovodstvo:' . $pdo->lastInsertId();
    echo '<br>';


    $preparedStatement = $pdo->prepare('INSERT INTO place (iznos) VALUES (:iznos)');

    $preparedStatement->execute(["iznos" => 7500]);

    echo 'Last inserted ID za plaće:' . $pdo->lastInsertId();
    echo '<br>';



    // Potvrđivanje transakcije
    $pdo->commit();

    echo "Transakcija uspješno izvršena.";

} catch (PDOException $e) {
    // Vraćanje transakcije u slučaju greške
    $pdo->rollBack();
    throw $e;

}