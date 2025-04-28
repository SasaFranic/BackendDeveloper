<?php
ob_start(); // počinje hvatati sav output
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
</head>
<body>
    <h1>Session</h1>
    <hr>
    <?php
    echo 'varijabla session prije pokretanja sesije: ';
    echo '<br>';
    print_r($_SESSION);

    session_start(); // pokretanje sesije
   

    echo '<br>';
    echo 'varijabla session nakon pokretanja sesije: ';
    echo '<br>';   
    print_r($_SESSION);

    $_SESSION['email'] = 'a@a.com';

    echo '<br>';
    echo 'varijabla email iz sesije ima vrijednost: ' . $_SESSION['email'];
    echo '<br>';

    
    session_destroy(); // uništavanje sesije
    $_SESSION = null; // ili može i [] = []; ili unset($_SESSION);
    echo 'varijabla session nakon uništavanja sesije: ';   
    print_r($_SESSION);
    echo '<br>';
    




    ?>


</body>
</html>