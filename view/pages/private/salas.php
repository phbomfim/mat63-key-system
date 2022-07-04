<?php 
  require "../../../utils/session.php";

  session_start();
  
  if($_SESSION["authorized"] !== true) {
    header("refresh:0; url=/view/pages/home.php");    
    echo "<script>alert('Be Authenticated')</script>";
  }

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
      
      <button class="btn btn-light" onClick="logout()">
        Log out
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
          <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
        </svg>
      </button>
    </header>
    <main class="row my-3">
      <?= var_dump($_SESSION) ?>
    </main>
  </div>
  <?php require "$COMPONENTS/footer-general.php" ?>
  <script>
    function logout() {
      <?php strikeSession(); ?>
      window.location.href="/view/pages/home.php";
    }
  </script>
</body>
</html>