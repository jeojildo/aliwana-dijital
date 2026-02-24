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
			<a href='?page=modulsbdjpn/monografia/f_aumenta'>
			<button class="btn btn-success">Aumenta Dadus Foun</button></a>
			</div>
	</div>
</div>
<h6 class="text-center">Lista Monografia JPN Media College</h6>
<hr>
<div class="table-responsive">
<table id="datatable" class="table table-bordered table-striped table-hover">
	<thead>
		<tr>
			<th>Nu.</th>
			<th>NIE</th>
			<th>Naran Estudante</th>
			<th>Titulu Monografia</th>
			<th>Dosente Orientador 1</th>
			<th>Dosente Orientador 2</th>
		</tr>
	</thead>
<tbody>
<?php
include "config/koneksaun.php";
$result =mysqli_query($conn, "SELECT monografia.nie, estudante.naranestudante, monografia.titulu, 
	a.narandosente as iddosente_1, 
	b.narandosente as iddosente_2 from monografia
		INNER JOIN dosente a ON monografia.iddosente_1 = a.iddosente
		INNER JOIN dosente b ON monografia.iddosente_2 = b.iddosente
		INNER JOIN estudante ON monografia.nie = estudante.nie");
$no = 1;
while($row=mysqli_fetch_array($result))
{
echo "<td>$no</td>";
echo "<td>$row[nie]</td>";
echo "<td>$row[naranestudante]</td>";
echo "<td><a href='?page=modulsbdjpn/monografia/hareedetallu&nie=$row[nie]'> $row[titulu]</a> </td>";
echo "<td>$row[iddosente_1]</td>";
echo "<td>$row[iddosente_2]</td>";
echo "</td></tr>";
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