<!--=====================================
VALIDAR SESIÓN
======================================-->

<?php

if(!isset($_SESSION["validarSesion"])){

	echo '<script>window.location = "'.$url.'";</script>';

	exit();

}

?>

<!--=====================================
BREADCRUMB CURSO
======================================-->
<div class="container-fluid well well-sm">
	
	<div class="container">
		
		<div class="row">
			
			<ul class="breadcrumb fondoBreadcrumb text-uppercase">
				
				<li><a href="<?php echo $url;  ?>">INICIO</a></li>
				<li class="active pagActiva"><?php echo $rutas[0] ?></li>

			</ul>

		</div>

	</div>

</div>

<!--=====================================
TRAER CURSO
======================================-->

<?php

if(isset($rutas[1]) && isset($rutas[2]) && isset($rutas[3])){

	$item = "id";
	$valor = $rutas[1];
	$idUsuario = $rutas[2];
	$idProducto = $rutas[3];

	$confirmarCompra = ControladorUsuarios::ctrMostrarCompras($item, $valor);

	if($confirmarCompra[0]["id_usuario"] == $idUsuario &&
	   $confirmarCompra[0]["id_usuario"] == $_SESSION["id"] &&
	   $confirmarCompra[0]["id_producto"] == $idProducto){


		echo '

		<div class="col-12 col-lg-5 mt-lg-5 p-1 p-lg-5 bg-white">
			
			<h3>Hola gracias por comprar el curso espero que supere tu expectativa. Suerte.</h3>


		</div>

		<div class="container-fluid cursos" id="cursos">
			
			<div class="container my-3">
				
				<!-- VIDEO 1  -->

				<div class="row video1">
					
					<div class="col-12 col-lg-5 mt-lg-5 p-1 p-lg-5 bg-white">
						
						<h3 class="text-center text-lg-left">Entrenamiento orientado a la fuerza máxima</h3>

						<p>Desarrolla tu máxima fuerza en los ejercicios
						de powerlifting con un plan de entrenamiento 
						diseñado para optimar tu rendimiento!</p>

					</div>

					<div class="col-12 col-lg-7 p-2 p-lg-5 bg-white">
						
							<iframe width="100%" height="315" src="https://www.youtube.com/embed/xsIzJuI5Z7c" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

					</div>

				</div>
				<br>
				<br>

				<!-- VIDEO 2 -->

				<div class="row video2">
								

					<div class="col-12 col-lg-5 mt-lg-5 p-1 p-lg-5 bg-white">
						
						<h3 class="text-center text-lg-right">Entrenamiento orientado a la musculación</h3>

						<p class="text-left text-lg-right">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque perferendis ad ab dignissimos iste autem consequatur beatae ducimus, ullam eligendi officia alias nesciunt laudantium consequuntur recusandae quisquam saepe, modi accusantium!</p>

					</div>

					<div class="d-block d-lg-none col-12 col-lg-7 p-2 p-lg-5 bg-white">
						
					<iframe width="100%" height="315" src="https://www.youtube.com/embed/xsIzJuI5Z7c" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

					</div>

				</div>

				<br>
				<br>

				<!-- VIDEO 3 -->

				<div class="row video3">
					
					<div class="col-12 col-lg-5 mt-lg-5 p-1 p-lg-5 bg-white">
						
						<h3 class="text-center text-lg-left">Entrenamiento orientado a la salud</h3>

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque perferendis ad ab dignissimos iste autem consequatur beatae ducimus, ullam eligendi officia alias nesciunt laudantium consequuntur recusandae quisquam saepe, modi accusantium!</p>

					</div>

					<div class="col-12 col-lg-7 p-2 p-lg-5 bg-white">
						
					<iframe width="100%" height="315" src="https://www.youtube.com/embed/xsIzJuI5Z7c" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

					</div>

				</div>

			</div>

		</div>

		';


	}else{

		echo '<div class="col-xs-12 text-center error404">
				               
	    		<h1><small>¡Oops!</small></h1>
	    
	    		<h2>No tienes acceso a este producto</h2>

	  	</div>';

	}

}else{

	echo '<div class="col-xs-12 text-center error404">
			               
    		<h1><small>¡Oops!</small></h1>
    
    		<h2>No tienes acceso a este producto</h2>

  	</div>';

}



