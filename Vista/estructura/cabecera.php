<?php
include_once "../../configuracion.php";
$dir = "";
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Expires" content="0">
  <meta http-equiv="Last-Modified" content="0">
  <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
  <meta http-equiv="Pragma" content="no-cache"><!---->
    <meta name=viewport content ="width=device-width">
    <title><?php echo $titulo; ?></title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    
    <link rel="icon" href="../css/images/icon-sis.png" type="image/x-icon">
    
    <link rel="stylesheet" type="text/css" href="../js/jquery-easyui-1.10.8/themes/bootstrap/easyui.css">
    <link rel="stylesheet" type="text/css" href="../js/jquery-easyui-1.10.8/themes/icon.css">

    <link rel="stylesheet" type="text/css" href="../js/jquery-easyui-1.10.8/themes/color.css">
    <link rel="stylesheet" type="text/css" href="../js/jquery-easyui-1.10.8/demo/demo.css">

    <script type="text/javascript" src="../js/bootstrap.bundle.min.js"></script>
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
                <!--<a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>-->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="../home/index.php">Home</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Ingresar
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="../login/index.php">Iniciar Sesi&oacute;n</a></li>
                                <li><a class="dropdown-item" href="../usuario/registrarseB.php">Registrarse</a></li>
                               <!-- <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Algo más aquí</a></li>
--></ul>
                        </li>
            

                    </ul>
              <!--      <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
                        <button class="btn btn-outline-success bg-dark" type="submit">Buscar</button>
                    </form>-->
                </div>
            </div>
        </nav>
    
        <!--<div data-options="region:'west',split:true,title:'West'" style="width:150px;padding:10px;">west content</div>-->
        <!--<div data-options="region:'east',split:false,collapsed:true,title:'Perfil'" style="width:200px;padding:10px;height: auto;"> Datos de usuario</div>-->

    </div>

        <div class="row md-12">