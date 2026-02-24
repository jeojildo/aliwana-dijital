<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet"  href="dataTables/datatables.css">
	<script  src="dataTables/datatables.js"></script>
	<link rel="stylesheet" type="text/css" href="dataTables/css/jquery.dataTables.css">
	<script type="media" src="dataTables/js/jquery.dataTables.js"></script>
</head>
<body>
<div class="container">
	<div class="row">
			<p>&nbsp;</p>
			<div class="btn-group">
			<a href='?page=modulsbdjpn/utilizador/f_aumenta'>
			<button class="btn btn-success">Aumenta Dadus Foun</button></a>
			</div> 

	</div>
</div>
<h6 class="text-center">Lista Utilizador JPN Media College</h6>
<hr>
<div class="table-responsive">
<table id="datatable" class="table table-bordered table-striped table-hover">
	<thead>
		<tr>
			<th>Nu.</th>
			<th>Naran Utilizador</th>
			<th>Naran Kompletu</th>
			<th>Deskrisaun</th>
			<th>Asaun</th>
		</tr>
		</thead>
<tbody>
<?
include "config/koneksaun.php";
$result = mysqli_query($conn, "SELECT * FROM utilizador");
$no = 1; 
while($row=mysqli_fetch_array($result))
{
echo "<td>$no</td>";
echo "<td>$row[naran_utilizador]</td>";
echo "<td>$row[naran]</td>";
echo "<td>$row[deskrisaun]</td>";
echo "<td> <a href='?page=modulsbdjpn/utilizador/f_hadiak&naran_utilizador=$row[naran_utilizador]'>Hadiak</a> | 
<a href='?page=modulsbdjpn/utilizador/hamoos&naran_utilizador=$row[naran_utilizador]' onClick=\"return confirm('Hakarak atu Hamoos Dadus $row[naran]?')\">Hamoos</a></td></tr>";
$no++;
}
echo "</table>";
?>
</tbody>
<p>&nbsp;</p>
</div>
<script type="text/javascript">
      $(document).ready(function(){
            $('#datatable').DataTable();
      });
</script>
</body>
</html>