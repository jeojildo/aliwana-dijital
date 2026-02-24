<?
include "config/koneksaun.php";
// bainhira xave_utilizador la muda
if (empty($_POST[xave_utilizador])){
		mysqli_query($conn, "UPDATE utilizador SET naran_utilizador='$_POST[naran_utilizador]',
						naran	='$_POST[naran]',
					 deskrisaun ='$_POST[deskrisaun]'	
		WHERE naran_utilizador	='$_POST[naran_utilizador]'");
}
// bainhira xave utilizador muda
else{
	$xave_utilizador=md5($_POST[xave_utilizador]);
	mysqli_query($conn, "UPDATE utilizador SET naran_utilizador='$_POST[naran_utilizador]',
					naran	='$_POST[naran]',
		 xave_utilizador    ='$xave_utilizador',
				 deskrisaun ='$_POST[deskrisaun]'	
	WHERE naran_utilizador	='$_POST[naran_utilizador]'");
}
echo"<meta http-equiv=refresh content='1; url=?page=modulsbdjpn/utilizador/hamosu'>";
?>