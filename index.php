<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generatore di password</title>
</head>
<body>
    <h1>Genera una password sicura</h1>
    <form action="index.php" method="GET">
        <label for="length"> Lunghezza password:</label>
        <input type="number" id="length" name="length" min="1" max="10" >
        <button type="submit">Genera password</button>
    </form>
</body>
</html>