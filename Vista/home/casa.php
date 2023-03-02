<!DOCTYPE html>
<html lang="es">

<head>

	<title>.: Home :.</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="icon" href="../css/images/icon-sis.png" type="image/x-icon">

	<link rel="stylesheet" type="text/css" href="../js/jquery-easyui-1.10.8/themes/bootstrap/easyui.css">

	<link rel="stylesheet" type="text/css" href="../js/jquery-easyui-1.10.8/themes/icon.css">

	<link rel="stylesheet" type="text/css" href="../js/jquery-easyui-1.10.8/themes/color.css">
	<link rel="stylesheet" type="text/css" href="../js/jquery-easyui-1.10.8/demo/demo.css">

	<script src="../js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">

	<script src="../js/jquery-easyui-1.10.8/jquery.min.js"></script>
	<script src="../js/jquery-easyui-1.10.8/jquery.easyui.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.9-1/core.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.9-1/md5.js"></script>

</head>

<body>
	<div class="row md-12">

		<div id="logo" style="width: 100%;height: 150px;background-image: url('../css/images/logo-sis-text-2-(800p).png');
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
							<li class='nav-item'><a class='nav-link active' aria-current='page' href='../home/paginaSegura.php'>Home</a></li>
							<li class="nav-item dropdown"><a class="nav-link dropdown-toggle active" id="navbarDropdown32" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="#">Administrar</a>
								<ul class="dropdown-menu" aria-labelledby="navbarDropdown32">
									<li><a class='dropdown-item' href='../menu/listaMenu.php'>Gestión de Menú</a></li>
									<li><a class='dropdown-item' href='../menu/permisosMenu.php'>Gestión permisos páginas</a></li>
									<li><a class='dropdown-item' href='../usuario/listarUsuario.php'>Gestión de Usuario</a></li>
									<li><a class='dropdown-item' href='../usuario/asignarRol.php'>Asignar rol usuario </a></li>
									<li><a class='dropdown-item' href='../menu/asignarMenu.php'>Asignar permisos menú</a></li>
								</ul>
							</li>
							<li class='nav-item'><a class='nav-link active' aria-current='page' href='../compra/index.php'>Carrito<i class="bi bi-cart4"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
											<path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
										</svg></i>
								</a>
							</li>
							<li class="nav-item dropdown"><a class="nav-link dropdown-toggle active" id="navbarDropdown74" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="#">Mi perfil</a>
								<ul class="dropdown-menu" aria-labelledby="navbarDropdown74">
									<li><a class='dropdown-item' href='../usuario/perfil.php'>Mis datos</a></li>
									<li><a class='dropdown-item' href='../compra/miscompras.php'>Mis compras</a></li>
								</ul>
							</li>
							<li class="nav-item dropdown"><a class="nav-link dropdown-toggle active" id="navbarDropdown74" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="#">Depósito</a>
								<ul class="dropdown-menu" aria-labelledby="navbarDropdown74">
									<li><a class='dropdown-item' href='../producto/listaProducto.php'>Gestión de Producto</a></li>
									<li><a class='dropdown-item' href='../compra/listaCompras.php'>Supervisar compras</a></li>
								</ul>
							</li>
							<li class="nav-item bg-dark"><a class="nav-link active" aria-current="page" href="javascript:void(0)" onclick="cerrarSesion()">admin<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
										<path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4m7 14l5-5l-5-5m5 5H9" />
									</svg>
									Salir
								</a></li>
						</ul>

					</div>
				</div>
			</nav>

		</div>
		<script src="../js/headerSeguro.js">
		</script>
		<div class="row md-12" style="min-height: 800px;">
			<link rel="stylesheet" type="text/css" href="../css/estiloproductos.css">

			<script src="../js/home/paginaSegura.js"></script>
			<input type="hidden" id=tipo value="null">





			<div id="productos" class="row container d-flex flex-wrap justify-content-center">




			</div>


		</div>


		<footer class="footer mt-auto py-3 bg-dark text-center pt-2">
			<div class="container">
				<span class="text-muted">© 2022 Copyright: PWD </span>
			</div>
		</footer>
</body>

</html>