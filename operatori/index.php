<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operatori</title>
</head>
<body>
    <?php
        $a = 10;
        $b = 5;
        $c = 'Algebra';
        $d = 'PHP';

        echo 'Varijable a: ' . $a . '<br>';
        echo 'Varijable b: ' . $b . '<br>';
        echo 'Varijable c: ' . $c . '<br>';
        echo 'Varijable d: ' . $d . '<br>';

        echo '<br>';

        echo 'Zbrajanje: ' . ($a + $b) . '<br>';
        echo 'Oduzimanje: ' . ($a - $b) . '<br>';
        echo 'Množenje: ' . ($a * $b) . '<br>';
        echo 'Dijeljenje: ' . ($a / $b) . '<br>';
        echo 'Modul: ' . ($a % $b) . '<br>';

        echo '<br>';

        $f = $c . ' - ' . $d;
        echo 'Konkatenacija: ' . $f . '<br>';

        $a += $b; // $a = $a + $b
        echo 'Kombinirani operator dodjele: ' . $a . '<br>';


        echo 'VAR DUMP:' . '<br>';
        var_dump($a > $b); // var_dump() is used to display structured information (type and value) about one or more variables
        echo '<br>';

        var_dump(10); // integer
        echo '<br>';


        var_dump(1.5); // float
        echo '<br>';

        echo 'Trenutna vrijednost a varijable: ' . $a . '<br>';
        echo 'Nova Vrijednost varijable a: ' . $a++ . '<br>';
        echo 'Nova Vrijednost varijable a: ' . $a++ . '<br>';
        echo "<br>";

        echo 'Trenutna vrijednost a varijable: ' . $b . '<br>';
        echo 'Nova Vrijednost varijable b: ' . $b-- . '<br>';
        echo 'Nova Vrijednost varijable b: ' . $b-- . '<br>';
        echo "<br>";

        echo 'Trenutna vrijednost a varijable: ' . $a . '<br>';
        echo 'Nova Vrijednost varijable a: ' . ++$a . '<br>';
        echo "<br>";

        echo 'Trenutna vrijednost a varijable: ' . $b . '<br>';
        echo 'Nova Vrijednost varijable b: ' . --$b . '<br>';


        
    ?>
    
</body>
</html>
