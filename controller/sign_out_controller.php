<?php

  include '../config/remote_connection.php';
  require "../model/usuario.php";

  $nome = $_POST['fullName'];
  $apelido = $_POST['username'];
  $email = $_POST['email'];
  $telefone = $_POST['phoneNumber'];
  $senha = $_POST['password'];
  $nivel = $_POST['nivel'];

  if (insertUsuario($con, $nome, $email, $apelido, $senha, $nivel, $telefone) != FALSE) {
    echo"<script language='javascript' type='text/javascript'>alert('Dados inseridos');</script>";
  }

  else {
    echo"<script language='javascript' type='text/javascript'>alert('Falha');</script>";
  }

  header("Location:../index.php");
?>