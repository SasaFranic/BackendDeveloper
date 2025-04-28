<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cokie</title>
<body>
    <h1>Cookie</h1>
    <hr>
    <?php
    /*
    print_r($_COOKIE); */
    echo "<br>";
    $cookieName = 'emmail';
    $cookieValue = 'b@b.com';
    $expirationTime = time() + (86400 * 30); // 86400 = 1 day
    $path = "/"; // Available within the entire domain

    setcookie($cookieName, $cookieValue, $expirationTime, $path);
    echo "<br>";

    print_r($_COOKIE);
    echo "<br>";
    ?>



   
</body>
</html>