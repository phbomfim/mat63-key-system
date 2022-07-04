<?php 
  require "../../../utils/session.php";

  session_start();
  
  require "../../../utils/verifySession.php";

  $COMPONENTS = "../../components";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Salas | Sistema de Controle de Chaves - UFBA</title>
  <?php require "$COMPONENTS/meta-general.php" ?>
</head>
<body class="container-fluid">
  <div class="container mt-3 full-screen">
    <header class="row">
      <h1 class="col-12 text-center text-strange">Salas</h1>
    </header>
    <?php require '../../components/nav-members.php' ?>
    <main class="row my-3">
      <?= var_dump($_SESSION) ?>
    </main>
  </div>
  <?php require "$COMPONENTS/footer-general.php" ?>
</body>
</html>