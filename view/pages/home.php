<?php 
  $COMPONENTS = "../components";
  $ASSETS = "../assets";
  $STYLE = "../style";

  // include '../../config/local_connection.php';
  include '../../config/remote_connection.php';

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Sistema de Controle de Chaves - UFBA</title>
  <?php require "$COMPONENTS/meta-general.php" ?>
</head>
<body class="container-fluid">
  <div class="container mt-3 full-screen">
    <header class="row">
      <h1 class="col-12 text-center text-strange">Key System</h1>
    </header>
    <main class="row my-3">
      <aside class="col-12 col-md-6 mt-4">
        <div class="row h-100 align-items-center">
          <?php require "$COMPONENTS/logo.php" ?>
        </div>
      </aside>
      <article class="col-12 col-md-6 text-center mt-5">
        <section class="mb-5 border-bottom border-danger">
          <h2>Sign in</h2>
          <?php require "$COMPONENTS/home-sign-in.php" ?>
        </section>
        <section>
          <h2>Sign out</h2>
          <?php require "$COMPONENTS/home-sign-out.php" ?>
        </section>
      </article>
    </main>
  </div>
  <?php require "$COMPONENTS/footer-general.php" ?>
</body>
</html>