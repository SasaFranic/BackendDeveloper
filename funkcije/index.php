<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funkcije</title>
</head>
<body>
    <h1>Funkcije</h1>
    <h2>Prvi zadatak</h2>
    <hr>
    <?php
        function vratiTekst() {
            return "Tekst tekst Tekst";
        }

        $tekst = vratiTekst();
        echo $tekst;

        
    ?>

<hr>

<?php
    function addNumbers ($a, $b, $printResult = false) {
        $sum = $a + $b;

        if ($printResult) {
            echo '$a + $b = ' . $sum;
            
        }
        echo '* <br>';

        return $sum;

    }

        addNumbers(17, 10, true);
        addNumbers(5, 6, false);
        addNumbers(5, 6);
        addNumbers(5, 6, 0);
        addNumbers(5, 6, 1);
        addNumbers(5, 6, 100);
        addNumbers(5, 6);
?>

<hr>

<h2>Drugi zadatak</h2>

<?php
    function getFullNameToUpper ($name, $surname) {
        $fullName = $name . ' ' . $surname;
        $fullName = strtoupper ($fullName);

        return $fullName;
    }

    $luka = getFullNameToUpper('Luka' , 'Horvat');
    echo $luka; 
?>

<hr>

<h2>Doseg varijabli</h2>
<?php
    function primjerDosega() {
    $a = 0;
    static $b = 0;

    echo '$a: ' . $a . ' ; $b: ' . $b . '<br>';

    $a++;
    $b++;
    }

    for($i = 0; $i < 20; $i++) {
        primjerDosega();
    }
    echo '<br>';
    primjerDosega();
    primjerDosega();
    primjerDosega();
?>

<hr>

<h2>Treci zadatak</h2>
<?php
    function addToCurrentSum($number) {
        static $sum = 0;
        $sum += $number;

        echo '$sum: ' . $sum . '<br>';

        return $sum;
        
    }

    $add = 'addToCurrentSum';


    for ($i = 0; $i < 5; $i++) {
        $add(rand(1,10));
    }


?>
    
</body>
</html>