<?php include('config.php') ?>

<nav class="navbar sticky-top navbar-expand-lg navbar-light ml-0  bg-header bg-dark" >

  <?php // TOGGLER  ?>
  <button class="navbar-toggler position-absolute" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <?php // TITOLO  ?>
  <a class="navbar-brand">
    <p class="font-size-3 font-bold font-color-white ml-5 mt-0 mb-0 padding-0 border-0">
      Gestionale riviste
    </p>
  </a>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
        <a class="nav-item nav-link margin-1" href="index.php">  <p id="home" class="font-size-3 font-color-2 margin-0 padding-0 border-0 ">Home</p></a>
        <a class="nav-item nav-link margin-1" href="pag1.php">   <p id="pag1" class="font-size-3 font-color-2 margin-0 padding-0 border-0 ">Abbonati</p></a>
        <a class="nav-item nav-link margin-1" href="pag2.php">   <p id="pag2" class="font-size-3 font-color-2 margin-0 padding-0 border-0 ">Riviste</p></a>
        <a class="nav-item nav-link margin-1" href="pag3.php">   <p id="pag3" class="font-size-3 font-color-2 margin-0 padding-0 border-0 ">Comuni</p></a>
    </div>
  </div>
</nav>
