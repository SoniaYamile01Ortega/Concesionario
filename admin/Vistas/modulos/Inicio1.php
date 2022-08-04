
<div class="content-wrapper">
	<section class="content-header">
	<h1>Inicio- Datos Generales del Sitio Web</h1>
	</section>

	<section class="content">

		<div class="box">
			<div class="box-body">

			<?php

			$datos = new DatosGeneralesC();
			$datos -> VerDatosC();

//			$datos -> EditarLogoC();
//			$datos -> EditarDatosC();


			?>
			
			

			<h1>Slide</h1>
			<div class="row">

			<div class="col-md-3">

				<img src="http://localhost/Concesionario/admin/Vistas/img/logo.jpg" style="100px">
				<button class="btn btn-danger">Quitar del Slide</button>	

			</div>

			<div class="col-md-3">

				<img src="http://localhost/Concesionario/admin/Vistas/img/sandero.jpg" style="100px">
				<button class="btn btn-danger">Quitar del Slide</button>	

			</div>


			</div>

		</div>

		</div>

	</section>
</div>
	
