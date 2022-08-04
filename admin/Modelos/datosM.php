<?php

require_once "ConexionBD.php";

class DatosGeneralesM  extends ConexionBD{

static public function VerDatosM($tablaBD){
$pdo = ConexionBD::cBD()->prepare("SELECT * FROM $tablaBD WHERE id = 1");
$pdo -> execute();
return $pdo -> fetch();
$pdo -> close();
$pdo = null;


}

}

