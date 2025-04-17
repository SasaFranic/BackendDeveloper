<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kontrolne strukture</title>
</head>
<body>
    <h1>Kontrolne strukture</h1>
    <h2>Zadatak 1</h2>
    <hr>
    <?php
      $a = 15;
      $b = 10;
      $c = 5;

      if ($b > $a && $b < $c || $b < $a && $b > $c) {
            echo 'varijabla b je izmedju varijable a i c';
        } else {
            echo 'varijabla b nije izmedju varijable a i c';    
      }

      echo '<hr>';
    
      if ($b > $a && $b < $c) {
            echo 'varijabla b je izmedju varijable a i c';
        } elseif ($b < $a && $b > $c) {
            echo 'varijabla b je izmedju varijable c i a';
        } else {
            echo 'varijabla b nije izmedju varijable a i c';    
      }
      echo '<hr>';

      switch ($b) {
        case $b > $a && $b < $c:
            echo 'varijabla b je izmedju varijable a i c';
            break;
        case $b < $a && $b > $c:
            echo 'varijabla b je izmedju varijable a i c';
            break;
        default:
            echo 'varijabla b nije jednaka ni varijabli a ni varijabli c';
      }
        echo '<hr>';
    
    ?>

    <h2>Zadatak 2</h2>
    <hr>
    <?php
        $dan = date ('N');
        echo 'Danas je ' . $dan . ' dan u tjednu. <br>';
       
        switch ($dan) {
            case 1:
                echo 'Danas je ponedeljak.';
                break;
            case 2:
                echo 'Danas je utorak.';
                break;
            case 3:
                echo 'Danas je srijeda.';
                break;
            case 4:
                echo 'Danas je cetvrtak.';
                break;
            case 5:
                echo 'Danas je petak.';
                break;
            case 6:
                echo 'Danas je subota.';
                break;
            case 7:
                echo 'Danas je nedelja.';
                break;
        }




    ?>
    
</body>
</html>