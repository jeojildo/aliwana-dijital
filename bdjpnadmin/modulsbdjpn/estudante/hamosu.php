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
			<a href='?page=modulsbdjpn/estudante/f_aumenta'>
			<button class="btn btn-success">Aumenta Dadus Foun</button></a>
			</div> 
	</div>
</div>
<h6 class="text-center">Lista Estudante JPN Media College</h6>
<hr>
<div class="table-responsive">
<table id="datatable" class="table table-bordered table-striped table-hover">
	<thead>
		<tr>
			<th>Nu.</th>
			<th>NIE</th>
			<th>Naran Estudante</th>
			<th>Jeneru</th>
			<th>Asaun</th>
		</tr>
		</thead>
<tbody>
<?
include "config/koneksaun.php";
$result = mysqli_query($conn, "SELECT * FROM estudante");
$no = 1; 
while($row=mysqli_fetch_array($result))
{
echo "<td>$no</td>";
echo "<td>$row[nie]</td>";
echo "<td>$row[naranestudante]</td>";
echo "<td>$row[jeneru]</td>";
echo "<td> <a href='?page=modulsbdjpn/estudante/f_hadiak&nie=$row[nie]'>Hadiak</a> | 
<a href='?page=modulsbdjpn/estudante/hamoos&nie=$row[nie]' onClick=\"return confirm('Hakarak atu Hamoos Dadus $row[naranestudante]?')\">Hamoos</a></td></tr>";
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