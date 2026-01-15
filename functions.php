<?php 
function generatePassword ($length){
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()_+-=';
    $result='';
    for ($i=0; $i < $length; $i++) { 
        $index = random_int(0, strlen($characters) - 1);
        $result .= $characters[$index];
    }
    return $result;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funzioni</title>
</head>
<body>
    
</body>
</html>