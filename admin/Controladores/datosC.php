	<?php

	class DatosGeneralesC{

	public function VerDatosC(){

		$tablaBD = "datos_generales";
		$resultado = DatosGeneralesM::VerDatosM($tablaBD);

		echo'<div class="col-md-6">
			<h1>Logo</h1>
			<img src="http://localhost/Concesionario/admin/'.$resultado["logo"].'" style="width: 350px">
				
				<h2>Cambiar logo</h2>
				
				<form method="post" enctype="multipart/form-data">
				
				<input type="file" name="logoNuevo">
				
				<input type="hidden" name="logoActual" value="'.$resultado["logo"].'" style="width:100px">
				
				<br>
				
				<button type="submit" class="btn btn-success">Cambiar</button>
				
				</form>
				
				</div>

				
				<div class="col-md-6">
				<h1>Datos</h1>
				<form method="post" enctype="multipart/form-data">
				
				<h2>Teléfono:</h2>
				<input type="text" class="input-lg" name="telefono" value="'.$resultado["telefono"].'">

				<h2>Correo:</h2>
				<input type="text" class="input-lg" name="correo" value="'.$resultado["correo"].'">

				<h2>Dirección:</h2>
				<input type="text" class="input-lg" name="direccion" value="'.$resultado["direccion"].'">

				<button type="submit" class="btn btn-success">Guardar Cambios</button>
				
				</form>
				</div>';

	}

	public function EditarLogoC(){

		if(isset($_POST["logoActual"])){

			$rutaLogo = $_POST["logoActual"];
		
			if(isset($_FILES["logoNuevo"] ["tmp_name"]) && !empty($_FILES["logoNuevo"] ["tmp_name"])){

			if(!empty($_POST["logoActual"])){

				unlink($_POST["logoActual"]);
			}

			if($_FILES["logoNuevo"]["type"]== "image/jpeg"){
				$rutaLogo = "Vistas/img/logo.jpg";
				$logo = imagecreatefromjpeg($_FILES["logoNuevo"]["tmp_name"]);
				imagejpeg($logo, $rutaLogo);

			}

			if($_FILES["logoNuevo"]["type"]== "image/png"){
				$rutaLogo = "Vistas/img/logo.png";
				$logo = imagecreatefrompng($_FILES["logoNuevo"]["tmp_name"]);
				imagepng($logo,$rutaLogo);

			}
		}

		$tablaBD = "datos_generales";

		$logoN = array("logo"=>$rutaLogo);
		
		$resultado = DatosGeneralesM ::EditarLogoM($tablaBD, $logoN);
		
		if($resultado == true){
			echo '<script>
			window.location = "Inicio";
			</script>';
		}
	}
}

	public function EditarDatosC(){

		if(isset($_POST["telefono"])){

			$tablaBD = "datos_generales";
			$datosC =  array('telefono' =>$_POST["telefono"] , "correo" => $_POST["correo"], "direccion"=>$_POST["direccion"]);

			$resultado = DatosGeneralesM::EditarDatosM($tablaBD, $datosC);
			if($resultado == true){
				echo '<script>
				window.location = "Inicio";
				</script>';
			}

		}

	}	

	

}