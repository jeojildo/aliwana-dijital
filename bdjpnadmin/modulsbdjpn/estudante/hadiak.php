<?
include "config/koneksaun.php";
mysqli_query($conn, "UPDATE estudante SET nie='$_POST[nie]',
naranestudante	='$_POST[naranestudante]',
jeneru ='$_POST[jeneru]'	
WHERE nie	='$_POST[nie]'");
echo"<meta http-equiv=refresh content='1; url=?page=modulsbdjpn/estudante/hamosu'>";
?>