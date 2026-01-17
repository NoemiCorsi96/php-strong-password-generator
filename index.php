<?php
session_start();
require_once 'functions.php';
$password=null;
//funzione che genera la password

$length=null; 
if (isset($_GET['length'])) {
   $length=(int)$_GET['length'];
   if ($length >= 1 && $length <= 10) {
     $password = generatePassword($length);

    $_SESSION['password'] = $password;

    header('Location: result.php');
    exit;
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generatore di password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body class="bg-light p-5">
    <div class="container py-5" >
        <h1 class="text-center mb-4">Strong Password Generator</h1>

        <div class="card shadow-sm mb-3">
            <div class="card-body">
                <h2 class="h5 mb-3">Genera una password sicura</h2>
                <form action="index.php" method="GET" class="row g-3">
                    <div class="col-12 col-md-6">
                        <label for="length"> Lunghezza password:</label>
                        <input type="number" id="length" name="length" min="1" max="10" class="form-control" required>
                        <div class="col-12 col-md-6 d-flex gap-2 mt-3">
                            <button type="submit" class="btn btn-primary">Genera password</button>
                            <a href="index.php" class="btn btn-outline-secondary">Annulla</a>
                        </div>
                    </div>
                    
                </form>
            </div>
        </div>

    

    <?php
    ?>
    </div>
    
 
</body>
</html>