<?php
include "config/koneksaun.php";
$sql =("Delete FROM estudante WHERE nie='$_GET[nie]'");
$query	= mysqli_query($conn,$sql);
echo"<meta http-equiv=refresh content='1; url=?page=modulsbdjpn/estudante/hamosu'>";
?>