<div class="login-box">

	<div class="login-logo">
		<h1>Concesionaria</h1>
	</div>


	<div class="login-box-body">
		<p class="login-box-msg">Inicio de sesión</p>
		<form method = "post">
			
			<div class ="form-group has-feedback">
				<input type="text" class ="form-control" name="usuario" placeholder="Usuario">
				<span class ="glyphicon glyphicon-user form-control-feedback" ></span>
			</div>

			<div class ="form-group has-feedback">
				<input type="password" class ="form-control" name="clave" placeholder="contraseña">
				<span class ="glyphicon glyphicon-lock form-control-feedback" ></span>
			</div>

			<div class="row">
				<div class="col-xs-12">
					<button type="submit" clas="btn btn-primary btn-block btn-flat">Ingresar</button>
				</div>
			</div>


			<?php
			$ingresar = new UsuariosC();
			$ingresar -> IniciarSesionC();

			?>
		</form>
	</div>
</div>


