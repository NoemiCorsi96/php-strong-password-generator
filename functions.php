<?php 
function generatePassword($length, $useLower, $useUpper, $useNumbers, $useSymbols) {
  $characters = '';

  if ($useLower) {
    $characters .= 'abcdefghijklmnopqrstuvwxyz';
  }
  if ($useUpper) {
    $characters .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
  }
  if ($useNumbers) {
    $characters .= '0123456789';
  }
  if ($useSymbols) {
    $characters .= '!@#$%^&*()_+-=';
  }

  // Se non è stato selezionato nessun set, non possiamo generare nulla
  if ($characters === '') {
    return null;
  }

  $result = '';
  for ($i = 0; $i < $length; $i++) {
    $index = random_int(0, strlen($characters) - 1);
    $result .= $characters[$index];
  }

  return $result;
}
?>
