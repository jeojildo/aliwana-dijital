<?php
include "config/koneksaun.php";
$edit = mysqli_query($conn, "SELECT * FROM estudante WHERE nie='$_GET[nie]'");
$row = mysqli_fetch_array($edit);
echo "<form method=POST action='?page=modulsbdjpn/estudante/hadiak'>
<h5>Formulariu Hadiak Dadus Estudante</h5><hr>
<table class='table' cellpadding='0' cellspacing='0' border='0' autofit>
<tbody>
<tr>
<td>Numeru Identifikasaun Estudante</td>
<td><input type=text name=nie readonly value='$row[nie]' size=7></td>
</tr>
<tr>
<td>Naran Estudante</td><td><input type=text name=naranestudante 
value='$row[naranestudante]'></td>
</tr>
<tr>
<td>Jeneru</td><td><input type=text name=jeneru 
value='$row[jeneru]'></td>
</tr>
<tr><td></td><td colspan='3'><button class='btn btn-sm btn-success'>Hadiak</button> &nbsp; <button class='btn btn-sm btn-warning' onclick=self.history.back()>Kansela
</button></tr>
</tbody>
</table>
</form>";
?>