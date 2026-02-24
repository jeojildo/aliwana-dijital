<?
include "config/koneksaun.php";
?>
<?php
error_reporting(0);
session_start();
if (empty($_SESSION['naran_utilizador']) AND empty($_SESSION['xave_utilizador'])){
 echo "<center>Atu asesu ba pajina ida ne'e, Ita tenke liu husi pajina Login<br>";
 echo "<a href=index.php><b>LOGIN</b></a></center>";
}
else{
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS an Javascript -->
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/style.css">
    <script type="text/javascript" src="bootstrap/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <title>Biblioteka Digital Monografia JPN Media College</title>
    <link rel="icon" type="image/png" href="img/jpnmedialogo.png">
  </head>
  <body>
    <!-- hahu sesaun navbar menu -->
    <section class="menu">
      <div class="container">
            <nav class="navbar navbar-expand-lg  navbar-light bg-light menu">
              <nav class="navbar-brand">
              <img src="img/headerbdjpn.png"  alt="Biblioteka Digital Monografia JPN Media College"></nav>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item">
                    <a class="nav-link" href="prinsipal.php" style="color: #135DA3;">Baranda</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="?page=modulsbdjpn/estudante/hamosu"style="color: #135DA3;">Estudante</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="?page=modulsbdjpn/dosente/hamosu"style="color: #135DA3;">Dosente</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="?page=modulsbdjpn/monografia/hamosu"style="color: #135DA3;">Monografia</a>
                  </li>
                </ul>
                <ul class="navbar-nav">
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" style="color: #135DA3;" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Utilizador
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="?page=modulsbdjpn/utilizador/hamosu">Utilizador</a>
                      <a class="dropdown-item" href="logout.php">Logout</a>
                    </div>
                  </li>
                </ul>
              </div> 
            </nav>             
      </div>
    </section>
    <!-- remata sesaun navbar menu-->

    <!-- hahu sesaun konteudu -->
    <section class="konteudu">
      <div class="container">
        <div class="col-md-12">
          <?
          if(!isset($_GET['page'])){
          include "baranda.php";
          }else
          {
          include"$_GET[page].php"; 
          }
          ?>
        </div>
      </div>
    </section>
    <!-- remata sesaun konteudu-->

    <!-- hahu navbar bottom -->
    <section class="footer" id="footer">
      <div class="container">
          <p align="center">Copyright &copy; JPN Media College 2021</p>
      </div>
    </section>
    <!-- remata navbar bottom-->
</body>
</html>
<?php
}
?>