<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nizovi</title>
</head>
<body>
    <?php
    $primeNumbers = [1, 2, 3, 5, 7];
    $isThirdElementSet = isset($primeNumbers[2]);
    if ($isThirdElementSet == true) {
        var_dump($primeNumbers[2]);
    } else {
        echo "Treći element ne postoji.";
    }

    echo "<br>";

    $primeNumbers[] = 11;

    $brojElemenatauNizu = count($primeNumbers);
    echo "<br>Broj elemenata u nizu je: " . $brojElemenatauNizu . "<br>";

    echo "<br>";

    echo "PRIME NUMBERS: " . "<br>";
    var_dump($primeNumbers);
    echo "<br>";


    rsort($primeNumbers);
    echo "SORTED PRIME NUMBERS: " . "<br>";
    var_dump($primeNumbers);

    echo "<br>";

    ?>

    <br><br><br><br>

    <h2> Drugi zadatak </h2>
    <br>

    <?php
    $users = [
        'Luka'=> [
            'ime' => 'Luka',
            'prezime' => 'Horvat',
            'godine' => 22,
            'spol' => 'M',
        ],

        'Ana'=> [
            'ime' => 'Ana',
            'prezime' => 'Anic',
            'godine' => 25,
            'spol' => 'Z',
        ]

     
    ];

    echo '<pre>';
    var_dump($users);
    echo '</pre>';

    echo "<br>";
    echo "<br>";
    echo "<br>";

    unset($users['Luka'] ['spol']);
    unset($users['Ana'] ['spol']);

    echo '<pre>';
    var_dump($users);
    echo '</pre>';

    echo "<br>";
    echo "<br>";
    echo "<br>";

    $users ['Mirko'] = [
        'ime' => 'Mirko',
        'prezime' => 'Mirkovic',
        'godine' => 30,
    ];

    echo '<pre>';
    print_r($users);
    echo '</pre>';
    




    ?>
    
</body>
</html>