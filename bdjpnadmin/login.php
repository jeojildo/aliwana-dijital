<?php 
// ativa session 
session_start();
// bolu file koneksaun
include_once"config/koneksaun.php";
 // kapta dadus ne'ebe haruka liu husi form
$utilizador =$_POST['naran_utilizador'];
$xave =(md5($_POST['xave_utilizador']));
 
// atu hili dadus administrator ho naran utilizador no xave ne'ebe hanesan
$data = mysqli_query($conn,"SELECT * FROM utilizador WHERE naran_utilizador='$utilizador' AND xave_utilizador='$xave'");
 
// se karik dadus iha tabela utilizador iha taun sei verifika katak dadus utilizador no xave ne'ebe ita hatama iha form login hanesan ona.
// se hanesan ona taun sei hamosu pajina prinsipal
// karik sei iha erru ruma taun sei mosu mensagen iha address bar katak falla
$find = mysqli_num_rows($data);
if($find > 0){
	$_SESSION['naran_utilizador'] = $utilizador;
	$_SESSION['s'] = "login";
	header("location:prinsipal.php");
}else{
	header("location:index.php?mensagen=falla");
}
?>