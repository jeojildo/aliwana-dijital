<?php
include "config/koneksaun.php";
mysqli_query($conn, "UPDATE dosente SET iddosente='$_POST[iddosente]',
narandosente	='$_POST[narandosente]',
	  edukasaun ='$_POST[edukasaun]',
		  email ='$_POST[email]'	
WHERE iddosente	='$_POST[iddosente]'");
echo"<meta http-equiv=refresh content='1; url=?page=modulsbdjpn/dosente/hamosu'>";
?>