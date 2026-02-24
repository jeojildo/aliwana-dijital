<?
include"config/koneksaun.php";
 ?>
<html>
<head>
</script>
</head>
<body>
<form method="POST" action="?page=modulsbdjpn/monografia/aumenta" enctype="multipart/form-data">
		<table class="table" cellpadding="0" cellspacing="0" border="0">
			<tr><td colspan="3"><b>Formulariu Dadus Monografia JPN Media College</td></tr>
			<tr>
			<td>Numeru Identifikasaun Estudante</td><td>
			<select  name="nie" id="estudante"  required>
			 <option value="" selected>Hili Estudante</option>
			 <?php 
			 $query = mysqli_query($conn, "SELECT * FROM estudante");
			 while($row = mysqli_fetch_array($query)){
			?>  
			<option value="<?php echo $row['nie']; ?>"><?php echo $row['naranestudante'] ?></option>
			<?php 
			}
			?>
			</select> </td></tr>
			</tr>
			<tr>
			<td>Docente Orientador 1</td><td>
			<select  name="iddosente_1" id="dosente"  required>
			 <option value="" selected>Hili Dosente Orientador 1</option>
			 <?php 
			 $query = mysqli_query($conn, "SELECT * FROM dosente");
			 while($row = mysqli_fetch_array($query)){
			?>  
			<option value="<?php echo $row['iddosente']; ?>"><?php echo $row['narandosente'] ?></option>
			<?php 
			}
			?>
			</select> </td></tr>

			<tr>
			<td>Docente Orientador 2</td><td>
			<select  name="iddosente_2" id="dosente"  required>
			 <option value="" selected>Hili Dosente Orientador 2</option>
			 <?php 
			 $query = mysqli_query($conn, "SELECT * FROM dosente");
			 while($row = mysqli_fetch_array($query)){
			?>  
			<option value="<?php echo $row['iddosente']; ?>"><?php echo $row['narandosente'] ?></option>
			<?php 
			}
			?>
			</select> </td></tr>
			<tr>
			<td>Departementu</td><td>
			 <select name="departementu">
			  <option value="">..: Hili Departementu :..</option>
			  <option value="Jestaun Komputador">Jestaun Komputador</option>
			  <option value="Sistema Informasaun">Sistema Informasaun</option>
			</select> 
			</td>
			</tr>
			<tr>
			<td>Tinan Akademiku</td><td>
			 <select name="tinan">
			  <option value="2017">2017</option>
			  <option value="2018">2018</option>
			</select> 
			</td>
			</tr>
			<tr>
			<td>Titulu Monografia</td><td><input type="text" name="titulu" size="60" required>  </td>
			</tr>

			<tr>
			<td>Abstratu Monografia</td><td><textarea name="abstratu"></textarea> </td>
			</tr>
			<tr>
			<td>Abstratu </td><td><input class="form-control" type="file" name="upload"/></td>
			</tr>
			<tr>
			<td>Liafuan Xave</td><td><input type="text" name="liafuanxave" placeholder="Liafuan Xave" size="50" required></td>
			</tr>
			<tr>
			<tr>
			<tr>
			  <td></td>
			<td colspan="2"><button class='btn btn-sm btn-success'>Rai</button> &nbsp; <button class='btn btn-sm btn-warning' onclick=self.history.back()>Kansela</button></tr>
		</table>
</form>
</body>
</html>