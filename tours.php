<html>
<head>
<?php 
$page='tours';
include('incluidos.php'); 
?>
</head>
<body>

<?php 
include('superior.php'); 
?>

<!--Inicio Container-->
<div id="container" class="col-md-10">

	
	<!--Inicio barra-->
	<div id="barra" class="row">
		
		
	</div>
	<!--Fin barra-->

	<?php 
	include('buscador.php'); 
	?>

	<!--Inicio tours-->
	<div id="tours" class="row">
		
		<!--Inicio tour-->
		<div class="tour col-md-8 col-md-offset-2">
			
			<!--Inicio imagenprecio-->
			<div class="col-md-12 imagenprecio">
				<!--Inicio imgtour-->
				<div class="imgtour col-md-8">
					<img src="img/tour1.png" class="img-responsive">
				</div>
				<!--Fin imgtour-->	
				<!--Inicio preciotour-->
				<div class="preciotour col-md-4">
					<p>Tours</p>
					<div class="usddolartour col-md-12">
						<p class="usdtour">USD</p>
						<p class="dolartour">70</p>
					</div>
					
					<p class="incluimp">Incluido impuestos</p>
					<a href="#" class="btn btn-success btnreserva">Reservar</a>
					
				</div>
				<!--Fin preciotour-->	
			</div>
			<!--Fin imagenprecio-->	
			<!--Inicio titulotour-->
			<div class="titulotour col-md-12">
				<h3>City Tour Bus, Quito</h3>	
			</div>
			<!--Fin titulotour-->
			<!--Inicio desctour-->
			<div class="desctour col-md-12">
				<p>Lorem ipsum</p>	
			</div>
			<!--Fin desctour-->
			<!--Inicio btnmoreinfo-->
			<div class="btnmoreinfo col-md-12">
				<a href="#" class="btn btn-success">Lorem ipsum</a>	
			</div>
			<!--Fin btnmoreinfo-->
			
		</div>
		<!--Fin tour-->
		
	</div>
	<!--Fin tours-->

</div>
<!--Fin Contanier-->


<?php include('footer.php'); ?>


<script src="js/acordeon.js"></script>
<script src="js/custom.js"></script>


</body>
</html>