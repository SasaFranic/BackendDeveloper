<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Files</title>
</head>
<body>
    <h1>Files</h1>
    <hr>
        <form action="obrada.php" method="post" enctype="multipart/form-data">
            <label>
                Slika:
                <input type="file" name="slika">
            </label>
            <input type="submit" name="Upload">
        </form>
    
</body>
</html>