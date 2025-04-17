<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Varijable i konstante</title>
</head>
<body>
    <div>
        <?php
        $cijeli_broj = 7; // cijeli broj
        $decimalni_broj = 3.7; // decimalni broj
        $string = "Tekstualni zapis"; // string
        $logicka_vrijednost = true; // boolean (true ili false)

        echo $cijeli_broj;
        echo "<br/>"; // ispis cijelog broja
        echo $decimalni_broj;
        echo "<br/>"; // ispis decimalnog broja
        echo $string;
        echo "<br/>"; // ispis stringa
        echo $logicka_vrijednost;
        echo "<br/>"; // ispis logičke vrijednosti, true ispisuje 1, false ne ispisuje ništa


        define('PI', 3.14); // definiranje konstante PI
        echo PI; // ispis konstante PI 
        echo "<br/>"; // ispis konstante PI

        //Referenciranje varijable
        $a = 1; // definiranje varijable a
        $b = $a; // definiranje varijable b kao kopije na varijablu a, kopija vrijednosti varijable a u varijablu b
        // $b = &$a; // definiranje varijable b kao referenca na varijablu a, koristi se & znak, referenca --> varijabla b prati šta se dešavana sa var_a i preslikava promjene
        $a = 2; // promjena vrijednosti varijable a

        echo 'a: ' . $a; // ispis varijable a, ispisuje 2
        echo "<br/>"; // ispis varijable a, ispisuje 2
        echo 'b: ' . $b; // ispis varijable b, ispisuje 1
        echo "<br/>"; // ispis varijable b, ispisuje 1


        ?>
    </div>
    
</body>
</html>1
