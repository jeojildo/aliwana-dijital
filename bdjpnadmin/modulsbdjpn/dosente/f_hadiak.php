<?php
include "config/koneksaun.php";
$edit = mysqli_query($conn, "SELECT * FROM dosente WHERE iddosente='$_GET[iddosente]'");
$row = mysqli_fetch_array($edit);
echo "<form method=POST action='?page=modulsbdjpn/dosente/hadiak'>
<h5>Formulariu Hadiak Dadus Dosente</h5><hr>
<table class='table' cellpadding='0' cellspacing='0' border='0' autofit>
<tbody>
<tr>
<td>ID Dosente</td>
<td><input type=text name=iddosente readonly value='$row[iddosente]' size=7></td>
</tr>
<tr>
<td>Naran Dosente</td><td><input type=text name=narandosente 
value='$row[narandosente]'></td>
</tr>
<tr>
<td>Edukasaun</td><td><input type=text name=edukasaun 
value='$row[edukasaun]'></td>
</tr>
<tr>
<td>Email</td><td><input type=text name=email 
value='$row[email]'></td>
</tr>
<tr><td></td><td colspan='3'><button class='btn btn-sm btn-success'>Hadiak</button> &nbsp; <button class='btn btn-sm btn-warning' onclick=self.history.back()>Kansela
</button></tr>
</tbody>
</table>
</form>";
?>