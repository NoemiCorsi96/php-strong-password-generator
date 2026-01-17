<?php 
function generatePassword ($length){
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()_+-=';
    $result='';
    for ($i=0; $i < $length; $i++) { 
        $index = random_int(0, strlen($characters) - 1);
        $result .= $characters[$index];
    }
    return $result;
}?>
