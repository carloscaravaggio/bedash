<?php
	require_once "./config/APP.php";
	require_once "./controladores/vistasControlador.php";

	$plantilla = new vistasControlador();
	$plantilla->obt_plantilla_controlador();
