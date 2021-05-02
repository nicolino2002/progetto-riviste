<?php

  include 'config.php';
  unset($_SESSION['new_abb_message']);  //NOME COMPLETO
  $nome=$_POST["nome"];
  $cognome=$_POST["cognome"];
  //EMAIL
  $email=$_POST["email"];
  //INDIRIZZO
  $tipovia=$_POST["tipovia"];
  $nomevia=$_POST["nomevia"];
  $civico=$_POST["civico"];
  $comune=$_POST["comune"];

  $sql="INSERT INTO abbonati(Cognome, Nome, TipoVia, NomeVia, Civico, ID_Comune, Email,valid) VALUES ('$cognome','$nome','$tipovia','$nomevia','$civico','$comune','$email',1)";

    if ($db->query($sql) === TRUE) {
      $sql="SELECT Email FROM abbonati WHERE email = 'pinoliso@gmail.com' LIMIT 1";
      $db->query($sql);
      $_SESSION['new_abb_message']="allow";
    } else {
      $_SESSION['new_abb_message']="deny";
    }


    $db->close();
    header('location:pag1.php');

 ?>
