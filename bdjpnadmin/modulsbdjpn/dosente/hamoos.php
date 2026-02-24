<?php
include "config/koneksaun.php";
$sql =("DELETE FROM dosente WHERE iddosente='$_GET[iddosente]'");
$query	= mysqli_query($conn,$sql);
echo"<meta http-equiv=refresh content='1; url=?page=modulsbdjpn/dosente/hamosu'>";
?>
