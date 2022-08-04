<div class="content-wrapper">
	
	<section class="content-header">
		
		<h1>Gestor de su Perfil Personal</h1>

	</section>

	<section class="content">
		
		<div class="box">
			
			<div class="box-body">
				
				<form method="post" enctype="multipart/form-data">
					
					<div class="row">
						
						<?php

						$perfil = new UsuariosC();
						$perfil -> VerPerfilC();

						?>

					</div>

					<div class="box-footer">
						
						<button class="btn btn-success btn-lg pull-right" type="submit">Guardar Cambios</button>

					</div>


					<?php

					$guardar = new UsuariosC();
					$guardar -> GuardarDatosC();

					?>

				</form>
				
			</div>

		</div>

	</section>

</div>