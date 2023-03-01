<?php
include_once("../../configuracion.php");
require_once("menu.php");
$dir = "";
//$mensajeError = "no se pudo concretar";
$objSesion = new Session();

$urlcompleto = $_SERVER['PHP_SELF'];
$urlMenu = (explode('/', $urlcompleto, 4));
// urlMenu[3] guarda los datos de la página

$resp = $objSesion->validar();
$permisosOk = $objSesion->tengoPermisos($urlMenu[3]);
$puedeEntrar = false;
if ($resp && $permisosOk) {
	$puedeEntrar = true;
	$idusuario=$objSesion->getUsuario()->getIdusuario();
	$nombre=$objSesion->getUsuario()->getUsnombre();
	//echo("<script>location.href = '../home/index.php';</script>");
} else {
	//	$mensaje = "Error, no tiene permisos para ingresar en la página";
	echo ("<script>location.href = '../login/index.php?msg=Error';</script>");
}

?>


<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="Expires" content="0">
  <meta http-equiv="Last-Modified" content="0">
  <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
  <meta http-equiv="Pragma" content="no-cache"><!---->
	<title><?php echo $titulo; ?></title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="icon" href="../css/images/icon-sis.png" type="image/x-icon">

	<link rel="stylesheet" type="text/css" href="../js/jquery-easyui-1.10.8/themes/bootstrap/easyui.css">
	
	<link rel="stylesheet" type="text/css" href="../js/jquery-easyui-1.10.8/themes/icon.css">

	<link rel="stylesheet" type="text/css" href="../js/jquery-easyui-1.10.8/themes/color.css">
	<link rel="stylesheet" type="text/css" href="../js/jquery-easyui-1.10.8/demo/demo.css">

	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">

	<script type="text/javascript" src="../js/jquery-easyui-1.10.8/jquery.min.js"></script>
	<script type="text/javascript" src="../js/jquery-easyui-1.10.8/jquery.easyui.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.9-1/core.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.9-1/md5.js"></script>

</head>

<body>
	<div class="row md-12">

		<div id="logo" align="center" style="width: 100%;height: 150px;background-image: url('../css/images/logo-sis-text-2-(800p).png');
background-repeat: no-repeat;
background-size: contain;
background-position: center center;
border: 0px solid black;
text-align: center;

">
		</div>
		<div class="row">
			<nav class="navbar navbar-expand-md navbar-dark bg-primary">
				<div class="container-fluid">
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav me-auto mb-2 mb-lg-0">
							<?php 
							
							echo imprimirMenu($objSesion,$nombre);
							
							?>
					</ul>
					
					</div>
				</div>
			</nav>

		</div>
		<script type="text/javascript" src="../js/headerSeguro.js">
</script>
		<div class="row md-12" style="min-height: 800px;">