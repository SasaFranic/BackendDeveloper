<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <style>
        div {
            margin: 30px;
            padding: 30px;
            border: 1px solid #ccc;
        }
    </style>

</head>
<body>
    <h1>Login</h1>

   <?php
    Include 'obrazac.php';
   ?>

    <div>
   <?php
    $ime = 'Saša';
    $prezime = 'Franić';

    $full_name = $ime . ' ' . $prezime;
    //ovo iznad može i ovako: $full_name = "$ime $prezime";
    echo "<h2>Dobrodošao, $full_name</h2>";
    echo "<br/>";

    $godine = 50;

    echo $ime . ' ima ' . $godine . ' godina.';
    // ovo iznad može i ovako: echo "$ime ima $godine godina.";

    echo "<br/>";

    $je_li_musko = true; // true = muško, false = žensko
    if ($je_li_musko == true) {
        // ili if ($je_li_musko) {
        echo $ime . ' je muško.';
    } else {
        echo $ime . ' je žensko.';
    }
    
    echo "<br/>";

    define('PI', 3.14);
    echo 'Pi je: ' . PI;
    echo "<br/>";

    $varijabla_a = 'A';	

    echo "Varijalba a je: $varijabla_a"; // ispisuje A
    echo "<br/>";
    echo 'Varijalba a je: $varijabla_a'; // ispisuje $varijabla_a
    echo "<br/>";

    //ovo je komentar

    # i ovo je komentar
    
    /** ovo je komentar   
     * višelinijski komentar
     * koji može imati više redaka
     */
 ?>
    
   
</div>
</body>
</html>