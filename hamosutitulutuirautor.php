<section class="content" id="content">
<div class="container">
	<div class="row" >
		<div class="col-md-12">
			<p>&nbsp;</p>
			 <h4 class="text-center"> Biblioteka Digital Monografia JPN Media College 2020</h4>
			 <h6 class="text-center"> Utiliza hodi buka Titulu Monografia Tuir Autor / Ema ne'ebe hakerek Monografia</h6>
			 <p>&nbsp;</p>
		</div> 
	</div>
</div>
</section>
<div class="container">  
    <div class="row">
		    <div class="col-md-4">
		    </div>
			<div class="col-md-4">
			 <h5>
	    	<form class="form-inline my-2 my-lg-0"  action="?page=hamosutitulutuirautor" method="POST">
	      	<input class="form-control mr-sm-2"  type="text" name="liafuanxave" size="20" autofocus autocomplete="off" required placeholder="Buka Tuir naran Autor" aria-label="buka">
	     	<button class="btn btn-outline-success my-2 my-sm-0"  type="submit" name="buka">Buka</button>
	    	</form> </h5>
		    </div>
		    <div class="col-md-4">
		    </div>
	</div>
</div>
</section>
<section class="content">
<div class="container">
<div class="row">
<div class="col-md-12">
<?php
include"bdjpnadmin/config/koneksaun.php";
if(isset($_POST['buka'])){
	$_SESSION['bukatitulumonografia'] = $_POST['liafuanxave'];
	$liafuanxave=$_SESSION['bukatitulumonografia'];
	$query=mysqli_query($conn, "SELECT monografia.nie, estudante.naranestudante, 
									   monografia.titulu, monografia.tinan,monografia.departementu,
							a.narandosente as iddosente_1,	
							b.narandosente as iddosente_2 
							FROM monografia
				INNER JOIN dosente a ON monografia.iddosente_1 = a.iddosente
				INNER JOIN dosente b ON monografia.iddosente_2 = b.iddosente
				INNER JOIN estudante ON monografia.nie = estudante.nie
				WHERE naranestudante LIKE '%$liafuanxave%'");
while($row=mysqli_fetch_array($query))
{
echo "<p>$row[naranestudante] - $row[nie] ($row[tinan])<a href='?page=hareedetallu&nie=$row[nie]'> $row[titulu]</a>. Departementu $row[departementu].</p>";
}
}
?>
	</div>
    </div>
</div>
</section>