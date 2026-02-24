<?php
include_once"config/koneksaun.php";
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
<meta name="author" content="JPN Media College">
<title>Biblioteka Digital Monografia JPN Media College</title>
<link rel="icon" type="image/png" href="img/jpnmedialogo.png">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="../js/jquery-3.3.1.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script language="javascript">
  function validasi(form){
  if (form.naran_utilizador.value == ""){
    alert("Ita presiza prienche naran utilizador.");
    form.naran_utilizador.focus();
    return (false);
  }
  if (form.xave_utilizador.value == ""){
    alert("Ita presiza prienche xave (password) ba utilizador.");
    form.xave_utilizador.focus();
    return (false);
  }
  return (true);
}
</script>
</head>
<body OnLoad="document.login.username.focus();">
<!-- header -->
<div class="container">
<div class="row">
<div class="col-md-4">
</div>
<div class="col-md-4">
&nbsp;
&nbsp;
<h6>Administrator Biblioteka Digital JPN College</h6>
<hr>
<form name="login" action="login.php" method="POST" onSubmit="return validasi(this)"> 
    <div class="form-group">
    <label for="exampleinputusername">Utilizador</label>
    <input type="text" class="form-control"  name="naran_utilizador" placeholder="Hatama naran utilizador" autocomplete="off" autofocus >
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Liafuan Xave</label>
      <input type="password" class="form-control" id="exampleInputPassword1" name="xave_utilizador" placeholder="Hatama Liafuan Xave" autocomplete="off">
    </div>
    <button type="submit" class="btn btn-primary">Log in</button>
</form>
</div>
<div class="col-md-4">
</div>
</div>
</div>

<!-- footer -->
<div class="container ">
  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
      <p align="center">Copyright &copy; JPN Media College 2021</p>
    </div>
    <div class="col-md-4">   
    </div>
  </div>
</div>
</div>
</body>
</html>