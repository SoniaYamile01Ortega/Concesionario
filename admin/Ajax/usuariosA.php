<?php


require_once "../Controladores/usuariosC.php";
require_once "../Modelos/usuariosM.php";

class UsuariosA{

	public $Uid;

	public function EditarUA(){

		$columna = "id";
		$valor = $this->Uid;

		$resultado = UsuariosC::VerUsuariosC($columna, $valor);

		echo json_encode($resultado);

	}

}


if(isset($_POST["Uid"])){

	$editar = new UsuariosA();
	$editar -> Uid = $_POST["Uid"];
	$editar -> EditarUA();

}