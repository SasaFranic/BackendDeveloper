<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vjezba-json</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Vježba JSON</h1>
    <hr>
    <?php
    // 1. korak - Čitanje sdržaja datoteke
    $knjigeContent = file_get_contents('./knjige.json');
    //print_r($knjigeContent); //string podaci koje moramo pretvoriti u strukturu podataka
    
    echo '<hr>';

    // 2. korak - Pretvaranje JSON u PHP array-pretvaranje sadržaja datoteke u niz
    $knjige = json_decode($knjigeContent, true);
    //print_r($knjige); //sada imamo PHP array koji možemo koristiti u PHP-u

    // 3. korak - Ispisivanje podataka - prikazati knjige u HTML-u
    foreach ($knjige as $knjiga) {
        echo'<div class="knjiga">';
        foreach ($knjiga as $kljuc => $vrijednost) {
            echo '<p>' . $kljuc . ': ' . $vrijednost . '</p>';
        }
        echo '</div>';
    }
    ?>

    <form action="./dodajKnjigu.php" method="POST">
            Autor:
            <input type="text" name="autor" required>
        </label><br>
    
    <br>
    <br>

        <label>
            Naslov:
            <input type="text" name="naslov" required>
        </label><br>
    
        <br>
        <br>
    
        <label>
            Godina:
            <input type="number" name="godina" required>
        </label><br>
    
        <br>
        <br>
    
        <input type="submit" value="Dodaj knjigu">

</body>
</html>