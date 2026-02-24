<?php
include_once"config/koneksaun.php";
 echo "<h3>Bemvindo,  </h3>
        <p>Hy <b>$_SESSION[naran_utilizador]</b>, Hi'it An mai iha Pajina Prinsipal Administrator Biblioteka Digital Monografia JPN Media College.
        <p>Fasilidade ementa (Menu) ne'ebe fornese iha pajina Administrator Biblioteka 
        Digital Monografia JPN Media College maka:<br>
        	1. Menu Estudante --> Utiliza hodi maneja dadus Estudante<br>
        	2. Menu Dosente --> Utiliza hodi maneja dadus Dosente<br>
        	3. Menu Monografia --> Utiliza hodi maneja dadus Monografia<br>
        	4. Menu Utilizador --> Utiliza hodi maneja dadus Utilizador<br>
        	</p>
        <br>Click kada ementa (Menu) iha Navigation bar parte leten hodi maneja. 
        <br>Obrigado barak</p>";

//echo "<p>&nbsp;</p>";
?>
<?php
echo "Ohin Loron"; echo "&nbsp";
$loron = date('l');
if ($loron=="Sunday") {
	echo "Domingo";
}elseif ($loron=="Monday") {
	echo "Segunda-Feira";
}elseif ($loron=="Tuesday") {
	echo "Tersa-Feira";
}elseif ($loron=="Wednesday") {
	echo "Kuarta-Feira";
}elseif ($loron=="Thursday") {
	echo("Kinta-Feira");
}elseif ($loron=="Friday") {
	echo "Sesta-Feira";
}elseif ($loron=="Saturday") {
	echo "Sabadu";
}
?>,
<?php

$data =date('d');
echo $data;
$fulan =date('F');
if ($fulan=="January") {
	echo " Janeiru ";
}elseif ($fulan=="February") {
	echo " Fevereiru ";
}elseif ($fulan=="March") {
	echo " Marsu ";
}elseif ($fulan=="April") {
	echo " Abril ";
}elseif ($fulan=="May") {
	echo " Maio ";
}elseif ($fulan=="June") {
	echo " Junho ";
}elseif ($fulan=="July") {
	echo " Julho ";
}elseif ($fulan=="August") {
	echo " Agustu ";
}elseif ($fulan=="September") {
	echo " Setembru ";
}elseif ($fulan=="October") {
	echo " Outubru ";
}elseif ($fulan=="November") {
	echo " Novembru ";
}elseif ($fulan=="December") {
	echo " Desembru ";
}
$tinan=date('Y');
echo $tinan;
?>
<script type="text/javascript">    
    function hamosuoras(){
        var tempu = new Date();
        var sh = tempu.getHours() + ""; 
        var sm = tempu.getMinutes() + "";
        var ss = tempu.getSeconds() + "";

        document.getElementById("clock").innerHTML = ("Oras ") + (sh.length==1?"0"+sh:sh) + ":" + (sm.length==1?"0"+sm:sm) + ":" + (ss.length==1?"0"+ss:ss) + ("  OTL");
    }
</script>
<body onload="hamosuoras();setInterval('hamosuoras()', 1000);">								
<span id="clock"></span> 