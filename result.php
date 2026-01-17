<?php
session_start();

$password = null;
if (isset($_SESSION['password'])) {
  $password = $_SESSION['password'];
}
?>
<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <title>Risultato</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container py-5" style="max-width: 720px;">

    <h1 class="text-center mb-4">Risultato</h1>

    <div class="card shadow-sm">
      <div class="card-body">
        <?php if ($password !== null) { ?>
          <h2 class="h5 mb-2">Password generata</h2>
          <p class="mb-3">
            <code class="fs-5"><?php echo $password; ?></code>
          </p>
        <?php } else { ?>
          <p class="mb-3">
            Nessuna password disponibile. Torna alla pagina principale e generane una.
          </p>
        <?php } ?>

        <a class="btn btn-primary" href="index.php">Torna indietro</a>
      </div>
    </div>

  </div>
</body>
</html>
