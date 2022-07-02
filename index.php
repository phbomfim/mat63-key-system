<?php 

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistema de Controle de Chaves - UFBA</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link href="./view/style/theme.css" rel="stylesheet" />
</head>
<body class="container-fluid">
  <div class="container mt-3">
    <header class="row">
      <h1 class="col-12 text-center">key System</h1>
    </header>
    <main class="row my-3">
      <aside class="col-12 col-md-6 mt-4">
        <div class="row h-100 align-items-center">
          <div class="w-100 text-center">
            <img src="./view/assets/logo.svg" class="img-fluid rounded-top" alt="Key System Logo">
          </div>
        </div>
      </aside>
      <article class="col-12 col-md-6 text-center mt-5">
        <section class="mb-5 border-bottom border-danger">
          <h2>Sign in</h2>
          <form id="sign-in">
            <div class="mb-3">
              <input type="email" class="form-control" name="email" placeholder="Email">
            </div>
            <div class="mb-3">
              <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-danger mb-5">Sign in</button>
          </form>
        </section>
        <section>
          <h2>Sign out</h2>
          <form id="sign-out">
            <div class="mb-3">
              <input type="text" class="form-control" name="fullName" max="50" min="15" placeholder="Full name">
            </div>
            <div class="mb-3">
              <input type="text" class="form-control" name="username" max="10" min="4" placeholder="Username">
            </div>
            <div class="mb-3">
              <input type="email" class="form-control" name="email" placeholder="Email">
            </div>
            <div class="mb-3">
              <input type="tel" class="form-control" name="phoneNumber" placeholder="Phone number">
            </div>
            <div class="mb-3">
              <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-danger">Sign in</button>
          </form>
        </section>
      </article>
    </main>
  </div>
  <footer class="row bg-dark justify-content-center text-light mt-5 pt-4 pb-2">
    <p class="col-12 mb-0 text-center">Engenharia de Software II</p>
    <p class="col-12 mb-0 text-center">UFBA 2022</p>
    <div class="col-12 my-2 githubLogo">
      <a href="https://github.com/phbomfim/mat63-key-system" target="_blank">
        <img src="./view/assets/Octocat.png" class="img-fluid"/>
      </a>
    </div>  
  </footer>
</body>
</html>