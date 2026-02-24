<?php
include "config/koneksaun.php";
$name = explode('.', $file_name);
$fileinfo=PATHINFO($_FILES["upload"]["name"]);
$newFilename=$fileinfo['filename']."_".time().".".$fileinfo['extension'];
move_uploaded_file($_FILES["upload"]["tmp_name"],"modulsbdjpn/monografia/abstratu/".$newFilename);
$location="" .$newFilename;
//  prepared statements
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$stmt =("INSERT INTO monografia (nie,  iddosente_1, iddosente_2, departementu, tinan, titulu,  abstratu, abstratud, liafuanxave )
VALUES ('$_POST[nie]','$_POST[iddosente_1]','$_POST[iddosente_2]','$_POST[departementu]','$_POST[tinan]','$_POST[titulu]','$_POST[abstratu]','$location','$_POST[liafuanxave]')");
if(!mysqli_query($conn,$stmt))
	{
	die('Error: '.mysqli_error($conn));
	}
//echo "1 record added";
if($stmt){
	//se susesu
?>
<script language="javaScript">
alert('Dadus Monografia rai tiha ona, obrigado barak!');
document.location="?page=modulsbdjpn/monografia/hamosu";
</script>
<?php
// se falla
}
  mysqli_close($conn);
?>