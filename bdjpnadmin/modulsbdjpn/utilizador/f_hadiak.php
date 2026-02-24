<?php
include "config/koneksaun.php";
$edit = mysqli_query($conn, "SELECT * FROM utilizador WHERE naran_utilizador='$_GET[naran_utilizador]'");
$row = mysqli_fetch_array($edit);
echo "<form method=POST action='?page=modulsbdjpn/utilizador/hadiak'>
<h5>Formulariu Hadiak Dadus Utilizador</h5><hr>
<table class='table' cellpadding='0' cellspacing='0' border='0' autofit>
<tbody>
<tr>
<td>Naran Utilizador</td>
<td><input type=text name=naran_utilizador readonly value='$row[naran_utilizador]' size=12></td>
</tr>
<tr>
<td>Xave Utilizador</td><td><input type=text name='xave_utilizador'>*)Bainhira xave utilizador la muda entaun husi mamuk deit</td>
</tr>
<tr>
<td>Naran </td><td><input type=text name=naran value='$row[naran]'></td>
</tr>
<tr>
<td>Deskrisaun</td><td><input type=text name=deskrisaun 
value='$row[deskrisaun]' size=75></td>
</tr>
<tr><td></td><td colspan='3'><button class='btn btn-sm btn-success'>Hadiak</button> &nbsp; <button class='btn btn-sm btn-warning' onclick=self.history.back()>Kansela
</button></tr>
</tbody>
</table>
</form>";
?>