<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<title>.: Home :.</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../js/jquery-easyui-1.10.8/themes/bootstrap/easyui.css">
	<link rel="icon" href="../css/images/icon-sis.png" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="../js/jquery-easyui-1.10.8/themes/icon.css">

	<link rel="stylesheet" type="text/css" href="../js/jquery-easyui-1.10.8/themes/color.css">
	<link rel="stylesheet" type="text/css" href="../js/jquery-easyui-1.10.8/demo/demo.css">

	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">

	<script type="text/javascript" src="../js/jquery-easyui-1.10.8/jquery.min.js"></script>
	<script type="text/javascript" src="../js/jquery-easyui-1.10.8/jquery.easyui.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.9-1/core.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.9-1/md5.js"></script>

</head>
<li class='nav-item'><a class='nav-link active' aria-current='page' href='../home/paginaSegura.php'>Home</a></li>
<li class='nav-item dropdown'><a href='#'>Administrar</a>
	<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
		<li class='dropdown-item'><a href='../menu/listaMenu.php'>Gestión de Menú</a></li>
		<li class='dropdown-item'><a href='../menu/permisosMenu.php'>Gestión permisos páginas</a></li>
		<li class='dropdown-item'><a href='../usuario/listarUsuario.php'>Gestión de Usuario</a></li>
		<li class='dropdown-item'><a href='../usuario/asignarRol.php'>Asignar Rol</a></li>
	</ul>
</li>
<li class='nav-item'><a class='nav-link active' aria-current='page' href='../menu/asignarMenu.php'>Permiso menu</a></li>
<li class='nav-item dropdown'><a href='#'>Mi perfil</a>
	<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
		<li class='dropdown-item'><a href='../usuario/perfil.php'>Mis datos</a></li>
		<li class='dropdown-item'><a href='../compra/miscompras.php'>Mis compras</a></li>
	</ul>
</li>
<li class='nav-item'><a class='nav-link active' aria-current='page' href='../compra/index.php'>Carrito</a></li>
<li class='nav-item'><a class='nav-link active' aria-current='page' href='../compra/index.php'>Compra</a></li>
<li class='nav-item dropdown'><a href='#'>Depósito</a>
	<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
		<li class='dropdown-item'><a href='../producto/listaProducto.php'>Gestión de Producto</a></li>
		<li class='dropdown-item'><a href='../compra/listaCompras.php'>Supervisar compras</a></li>
	</ul>
</li>

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
							<li class='nav-item'><a class='nav-link active' aria-current='page' href='../home/paginaSegura.php'>Home</a></li>
							<li class='nav-item dropdown'><a href='#'>Administrar</a>
								<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
									<li class='dropdown-item'><a href='../menu/listaMenu.php'>Gestión de Menú</a></li>
									<li class='dropdown-item'><a href='../menu/permisosMenu.php'>Gestión permisos páginas</a></li>
									<li class='dropdown-item'><a href='../usuario/listarUsuario.php'>Gestión de Usuario</a></li>
									<li class='dropdown-item'><a href='../usuario/asignarRol.php'>Asignar Rol</a></li>
								</ul>
							</li>
							<li class='nav-item'><a class='nav-link active' aria-current='page' href='../menu/asignarMenu.php'>Permiso menu</a></li>
							<li class='nav-item dropdown'><a href='#'>Mi perfil</a>
								<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
									<li class='dropdown-item'><a href='../usuario/perfil.php'>Mis datos</a></li>
									<li class='dropdown-item'><a href='../compra/miscompras.php'>Mis compras</a></li>
								</ul>
							</li>
							<li class='nav-item'><a class='nav-link active' aria-current='page' href='../compra/index.php'>Carrito</a></li>
							<li class='nav-item'><a class='nav-link active' aria-current='page' href='../compra/index.php'>Compra</a></li>
							<li class='nav-item dropdown'><a href='#'>Depósito</a>
								<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
									<li class='dropdown-item'><a href='../producto/listaProducto.php'>Gestión de Producto</a></li>
									<li class='dropdown-item'><a href='../compra/listaCompras.php'>Supervisar compras</a></li>
								</ul>
							</li> <!--	<li class="nav-item">
								<a class="nav-link active" aria-current="page" href="#">Inicio</a>
							</li>

							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
									Dropdown
								</a>
								<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
									<li><a class="dropdown-item" href="#">Acción</a></li>
									<li><a class="dropdown-item" href="#">Otra acción</a></li>
						
								</ul>
							</li>
-->
						</ul>

					</div>
				</div>
			</nav>

		</div>

		<div class="row md-12">
			<link rel="stylesheet" type="text/css" href="../css/estiloproductos.css">

			<script type="text/javascript" src="../js/home/paginaSegura.js"></script>
			<input type="hidden" id=tipo value="null">





			<div id="productos" class="container pt-2 pb-2">




			</div>


		</div>

	</div>
	<div data-options="region:'south',border:false" style="height:50px;background:#212529;color:white;padding:10px;text-align:center;">© 2022 Copyright: PWD - Grupo Nº7</div>
</body>

</html>