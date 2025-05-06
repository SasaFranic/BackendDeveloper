<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test vjezba</title>
</head>

<body>
    <?php
    require_once 'funkcije.php';
    define('FILE_PATH', 'people.json');
    ?>

    <h1>Test vjezba</h1>
    <hr>


    <form action="obrada.php" method="POST">
        <label>Ime:
            <input type="text" name="ime" required>
        </label>
        <br>
        <br>
        <input type="submit" value="Dodaj ime">
    </form>
    <br><br>
    <table border="1">
        <tr>
            <th>Ime</th>
            <th>Broj Slova</th>
            <th>Sadrži A</th>
            <th>Ime velikim slovima</th>
            <th>Ime malim slovima</th>
        </tr>

        <?php
        $file_json = file_get_contents(FILE_PATH);
        $people = json_decode($file_json, true);
        foreach ($people as $name) {

            echo "<tr>";
            echo "<td>" . $name . "</td>";
            echo "<td>" . brojSlova($name) . "</td>";
            echo "<td>" . sadrziA($name) . "</td>";
            echo "<td>" . velikaSlova($name) . "</td>";
            echo "<td>" . malaSlova($name) . "</td>";
            echo "</tr>";

        }
        ?>


    </table>




</body>

</html>