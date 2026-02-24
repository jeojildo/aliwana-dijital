<?
include "bdjpnadmin/config/koneksaun.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS an Javascript -->
    <link rel="stylesheet" type="text/css" href="bdjpnadmin/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bdjpnadmin/bootstrap/css/stylefebdjpn.css">
    <script type="text/javascript" src="bdjpnadmin/bootstrap/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="bdjpnadmin/bootstrap/js/bootstrap.min.js"></script>
    <title>Biblioteka Digital Monografia JPN Media College</title>
    <link rel="icon" type="image/png" href="img/JPNMedialogo.png">
  </head>
  <body>
    <!-- hahu sesaun navbar menu -->
    <section class="menu">
      <div class="container">
            <nav class="navbar navbar-expand-lg  navbar-light bg-light menu">
              <nav class="navbar-brand">
              <img src="img/jpnheader_2.png"  alt="Biblioteka Digital JPN Media College"></nav>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                    <a class="nav-link" href="?page=baranda"style="color: #135DA3;">Baranda</a>
                  </li>
                  <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" style="color: #135DA3;">Buka Titulu Monografia</a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="?page=bukatuirdepartementu">Buka Tuir Departamentu</a>
                        <a class="dropdown-item" href="?page=bukatuirautor">Buka Tuir Autor</a>
                      </div>
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