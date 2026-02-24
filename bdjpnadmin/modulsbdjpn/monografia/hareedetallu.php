<?php
include_once"config/koneksaun.php";
$result =mysqli_query($conn, "SELECT monografia.nie, estudante.naranestudante, 
	a.narandosente as iddosente_1, b.narandosente as iddosente_2, 
	monografia.departementu, monografia.tinan, monografia.titulu, 
	monografia.abstratu, monografia.abstratud, monografia.liafuanxave
	FROM monografia
		INNER JOIN dosente a ON monografia.iddosente_1 = a.iddosente
		INNER JOIN dosente b ON monografia.iddosente_2 = b.iddosente
		INNER JOIN estudante ON monografia.nie = estudante.nie 
	WHERE monografia.nie ='$_GET[nie]'");
while($row=mysqli_fetch_array($result))
{
echo "<h4>$row[titulu]</h4>";
echo " $row[naranestudante] - $row[nie], ($row[tinan]), $row[titulu], 
	   $row[departementu]";
echo "<br>";
?>
<?
$name=explode('/', $row['abstratud']);
?>
<?
echo "<br>";
echo "<a href='modulsbdjpn/monografia/download.php?file=$row[abstratud]'>Download Abstratu Monografia</a>";
echo "<br>";
echo "<br>";
echo "<p><b>Abstratu</b></p>";
echo "<p>$row[abstratu]</p>";
echo "<br>";
echo "<br>";
echo "<p><b>Liafuan Xave</b>: $row[liafuanxave]</p>";
echo "<br>";
echo "<p><b>Dosente Orientador 1</b>: $row[iddosente_1]</p>";
echo "<p><b>Dosente Orientador 2</b>: $row[iddosente_2]</p>";
echo "<p><b>Departementu</b>: $row[departementu]";
}
?>