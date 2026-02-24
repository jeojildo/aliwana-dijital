<?php
	session_start();
	session_destroy();
	echo "<center>Ita bo'ot sai ona husi Pajina JPN Media College  <b>[LOGOUT]<b>";
	header('location:index.php');
?>