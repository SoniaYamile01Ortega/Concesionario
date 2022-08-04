<?php

require_once "Controladores/plantillaC.php";
require_once "Controladores/usuariosC.php";
require_once "Modelos/usuariosM.php";

require_once "Controladores/datosC.php";

require_once "Modelos/datosM.php";



$plantilla = new Plantilla();
$plantilla -> MostrarPlantillaC();