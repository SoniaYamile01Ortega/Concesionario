<?php

class UsuariosC{


	public function IniciarSesionC(){

		if(isset($_POST["usuario"])){

			if(preg_match('/^[a-zA-Z0-9]+$/', $_POST["usuario"]) && preg_match('/^[a-zA-Z0-9]+$/', $_POST["clave"])){

				$tablaBD = "usuarios";

				$datosC = array("usuario"=>$_POST["usuario"], "clave"=>$_POST["clave"]);

				$resultado = UsuariosM::IniciarSesionM($tablaBD, $datosC);

				if($resultado["usuario"] == $_POST["usuario"] && $resultado["clave"] == $_POST["clave"]){

					$_SESSION["Ingresar"] = true;

					$_SESSION["id"] = $resultado["id"];
					$_SESSION["usuario"] = $resultado["usuario"];
					$_SESSION["clave"] = $resultado["clave"];
					$_SESSION["nombre"] = $resultado["nombre"];
					$_SESSION["apellido"] = $resultado["apellido"];
					$_SESSION["documento"] = $resultado["documento"];
					$_SESSION["direccion"] = $resultado["direccion"];
					$_SESSION["telefono"] = $resultado["telefono"];
					$_SESSION["foto"] = $resultado["foto"];
					$_SESSION["rol"] = $resultado["rol"];


					echo '<script>

					window.location = "Inicio";
					</script>';

				}else{

					echo '<br><div class="alert alert-danger">Error al Ingresar</div>';

				}

			}

		}

	}




	public function VerPerfilC(){

		$tablaBD = "usuarios";

		$id = $_SESSION["id"];

		$resultado = UsuariosM::VerPerfilM($tablaBD, $id);

		echo '<div class="col-md-6 col-xs-12">
							
							<h2>Nombre:</h2>
							<input type="text" class="input-lg" name="nombre" value="'.$resultado["nombre"].'">
							<input type="hidden" class="input-lg" name="id" value="'.$resultado["id"].'">

							<h2>Apellido:</h2>
							<input type="text" class="input-lg" name="apellido" value="'.$resultado["apellido"].'">

							<h2>Usuario:</h2>
							<input type="text" class="input-lg" name="usuario" value="'.$resultado["usuario"].'">

							<h2>Contraseña:</h2>
							<input type="text" class="input-lg" name="clave" value="'.$resultado["clave"].'">

						</div>

						<div class="col-md-6 col-xs-12">
							
							<h2>Documento:</h2>
							<input type="text" class="input-lg" name="documento" value="'.$resultado["documento"].'">

							<h2>Teléfono:</h2>
							<input type="text" class="input-lg" name="telefono" value="'.$resultado["telefono"].'">

							<h2>Dirección:</h2>
							<input type="text" class="input-lg" name="direccion" value="'.$resultado["direccion"].'">

							<h2>Foto de Perfil:</h2>
							<input type="file" name="fotoPerfil">
							<br>';

							if($resultado["foto"] == ""){

								echo '<img src="http://localhost/Concesionario/admin/Vistas/img/defecto.png" width="150px;" class="user-image">';

							}else{

								echo '<img src="http://localhost/Concesionario/admin/'.$resultado["foto"].'" width="150px;" class="user-image">';
								
							}

							

							echo '<input type="hidden" name="fotoActual" value="'.$resultado["foto"].'">

						</div>';

	}



	public function GuardarDatosC(){

		if(isset($_POST["id"])){

			$rutaImg = $_POST["fotoActual"];

			if(isset($_FILES["fotoPerfil"]["tmp_name"]) && !empty($_FILES["fotoPerfil"]["tmp_name"])){

				if(!empty($_POST["fotoActual"])){

					unlink($_POST["fotoActual"]);

				}

				if($_FILES["fotoPerfil"]["type"] == "image/jpeg"){

					$nombre = mt_rand(10, 999);

					$rutaImg = "Vistas/img/Usuarios/U-".$nombre.".jpg";

					$foto = imagecreatefromjpeg($_FILES["fotoPerfil"]["tmp_name"]);

					imagejpeg($foto, $rutaImg);

				}

				if($_FILES["fotoPerfil"]["type"] == "image/png"){

					$nombre = mt_rand(10, 999);

					$rutaImg = "Vistas/img/Usuarios/U-".$nombre.".png";

					$foto = imagecreatefrompng($_FILES["fotoPerfil"]["tmp_name"]);

					imagepng($foto, $rutaImg);

				}

			}


			$tablaBD = "usuarios";

			$datosC = array("id"=>$_POST["id"], "nombre"=>$_POST["nombre"], "apellido"=>$_POST["apellido"], "usuario"=>$_POST["usuario"], "clave"=>$_POST["clave"], "documento"=>$_POST["documento"], "telefono"=>$_POST["telefono"], "direccion"=>$_POST["direccion"], "foto"=>$rutaImg);

			$resultado = UsuariosM::GuardarDatosM($tablaBD, $datosC);

			if($resultado == true){

				echo '<script>

				window.location = "http://localhost/Concesionario/admin/Mis-Datos";
				</script>';

			}

		}

	}




	static public function VerUsuariosC($columna, $valor){

		$tablaBD = "usuarios";

		$resultado = UsuariosM::VerUsuariosM($tablaBD, $columna, $valor);

		return $resultado;

	}




	public function CrearUsuarioC(){

		if(isset($_POST["rol"])){

			$tablaBD = "usuarios";

			$datosC = array("nombre"=>$_POST["nombre"], "apellido"=>$_POST["apellido"], "usuario"=>$_POST["usuario"], "clave"=>$_POST["clave"], "rol"=>$_POST["rol"]);

			$resultado = UsuariosM::CrearUsuarioM($tablaBD, $datosC);

			if($resultado == true){

				echo '<script>

				window.location = "http://localhost/Concesionario/admin/Usuarios";
				</script>';

			}

		}

	}




	public function EditarUsuarioC(){

		if(isset($_POST["idE"])){

			$tablaBD = "usuarios";

			$datosC = array("id"=>$_POST["idE"], "nombre"=>$_POST["nombreE"], "apellido"=>$_POST["apellidoE"], "clave"=>$_POST["claveE"], "usuario"=>$_POST["usuarioE"], "rol"=>$_POST["rolE"]);

			$resultado = UsuariosM::EditarUsuarioM($tablaBD, $datosC);

			if($resultado == true){

				echo '<script>

				window.location = "http://localhost/Concesionario/admin/Usuarios";
				</script>';

			}

		}

	}



	public function BorrarUsuarioC(){

		if(isset($_GET["Uid"])){

			$tablaBD = "usuarios";

			$id = $_GET["Uid"];

			if($_GET["Ufoto"] != ""){

				unlink($_GET["Ufoto"]);

			}

			$resultado = UsuariosM::BorrarUsuarioM($tablaBD, $id);

			if($resultado == true){

				echo '<script>

				window.location = "http://localhost/Concesionario/admin/Usuarios";
				</script>';

			}

		}

	}



}