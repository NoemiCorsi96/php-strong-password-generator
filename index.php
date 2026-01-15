<?php

$password=null;
//funzione che genera la password
function generatePassword ($length){
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()_+-=';
    $result='';
    for ($i=0; $i < $length; $i++) { 
        $index = random_int(0, strlen($characters) - 1);
        $result .= $characters[$index];
    }
    return $result;
}
$length=null; 
if (isset($_GET['length'])) {
   $length=(int)$_GET['length'];
   if ($length >= 1 && $length <= 10) {
    $password = generatePassword($length);
  } else {
    $password = "Errore: la lunghezza deve essere compresa tra 1 e 10.";
   }
}
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

    <?php
    //controllo se length è stato impostato e stampo il valore
    if ($length !== null) { ?>
    <p> Hai richiesto una password lunga: <?php echo $length; ?> caratteri.</p>
    <?php } ?>
    <?php
    //controllo il risultato della password con la lunghezza scelta, se esiste 
    if ($password!== null) { ?>
    <p>La tua password generata è: <?php echo $password; ?></p>
    <?php } ?>
</body>
</html>