<?php
include"config/koneksaun.php";
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$stmt =("INSERT INTO dosente(iddosente, narandosente, edukasaun, email)
VALUES ('$_POST[iddosente]','$_POST[narandosente]','$_POST[edukasaun]','$_POST[email]')");
if(!mysqli_query($conn,$stmt))
	{
	die('Error: '.mysqli_error($conn));
	}
//echo "1 record added";
if($stmt){
	//se susesu
?>
<script language="javaScript">
alert('Dadus dosente rai tiha ona, obrigado barak!');
document.location="?page=modulsbdjpn/dosente/hamosu";
</script>
<?php
// se falla
}
  mysqli_close($conn);
?>