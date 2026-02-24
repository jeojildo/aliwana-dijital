<?php
include "config/koneksaun.php";
$sql =("DELETE FROM utilizador WHERE naran_utilizador='$_GET[naran_utilizador]'");
$query	= mysqli_query($conn,$sql);
echo"<meta http-equiv=refresh content='1; url=?page=modulsbdjpn/utilizador/hamosu'>";
?>