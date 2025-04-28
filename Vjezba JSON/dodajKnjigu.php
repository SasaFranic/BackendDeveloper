<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dodaj Knjigu</title>
</head>
<body>
    <h1>Dodaj knjigu</h1>
    <hr>
    <?php
    // nt_r($_POST); // ispisuje podatke koje šaljemo iz forme
    $knjigeContent = file_get_contents('./knjige.json');
    $knjige = json_decode($knjigeContent, true);
    // array_push($knjige, $_POST); // dodajemo novu knjigu u niz
    $knjige[] = $_POST; // dodajemo novu knjigu u niz
    print_r($knjige); // ispisujemo novi niz
    $knjigeJSON = json_encode($knjige, JSON_UNESCAPED_UNICODE); // pretvaramo niz u JSON
    file_put_contents('./knjige.json', $knjigeJSON);//remamo novi JSON u datoteku


    ?>
</body>
</html>