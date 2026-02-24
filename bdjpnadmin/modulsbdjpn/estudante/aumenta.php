<?php
include"config/koneksaun.php";
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$stmt =("INSERT INTO estudante(nie, naranestudante, jeneru)
VALUES ('$_POST[nie]','$_POST[naranestudante]','$_POST[jeneru]')");
if(!mysqli_query($conn,$stmt))
	{
	die('Error: '.mysqli_error($conn));
	}
if($stmt){
//se susesu
?>
<script language="javaScript">
alert('Dadus estudante rai tiha ona, obrigado barak!');
document.location="?page=modulsbdjpn/estudante/hamosu";
</script>
<?php
// se falla
}
  mysqli_close($conn);
?>