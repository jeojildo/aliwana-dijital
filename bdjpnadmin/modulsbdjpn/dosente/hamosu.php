<!DOCTYPE html>
<html>
<head>
	<title></title>
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
			<a href='?page=modulsbdjpn/dosente/f_aumenta'>
			<button class="btn btn-success">Aumenta Dadus Foun</button></a>
			</div> 
	</div>
</div>
<h6 class="text-center">Lista Dosente JPN Media College</h6>
<hr>
<div class="table-responsive">
<table id="datatable" class="table table-bordered table-striped table-hover">
	<thead>
		<tr>
			<th>Nu.</th>
			<th>ID Dosente</th>
			<th>Naran Dosente</th>
			<th>Edukasaun</th>
			<th>E-mail</th>
			<th>Asaun</th>
		</tr>
		</thead>
<tbody>
<?
include "config/koneksaun.php";
$result = mysqli_query($conn, "SELECT * FROM dosente");
$no = 1; 
while($row=mysqli_fetch_array($result))
{
echo "<td>$no</td>";
echo "<td>$row[iddosente]</td>";
echo "<td>$row[narandosente]</td>";
echo "<td>$row[edukasaun]</td>";
echo "<td>$row[email]</td>";
echo "<td> <a href='?page=modulsbdjpn/dosente/f_hadiak&iddosente=$row[iddosente]'>Hadiak</a> | 
<a href='?page=modulsbdjpn/dosente/hamoos&iddosente=$row[iddosente]' onClick=\"return confirm('Hakarak atu Hamoos Dadus $row[narandosente]?')\">Hamoos</a></td></tr>";
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