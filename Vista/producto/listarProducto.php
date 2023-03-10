<?php
$dir="../";
$titulo = "Lista Usuarios";
include_once $dir."../Vista/estructura/cabecera.php";
include_once '../../configuracion.php';

?>
<link rel="stylesheet" href="../vista/css/bootstrap/4.5.2/bootstrap.min.css">
<div class="container border border-secondary principal mt-3 pt-3">
   <h3 class="text-center">Listado de Productos</h3>
    <div class="row text-muted m-0">
        <?php 
        
        
        $objAbmProducto = new ABMproducto();

        $listaProducto = $objAbmProducto->buscar(null);
        //print_r($listaProducto);
        if(count($listaProducto)>0){
            ?>
            <table class="table table-dark table-striped text-center table-hover" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th scope="col">ID Producto</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Detalle</th>
                        <th scope="col">Cantidad de Producto</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Precio</th>
                                        
                    </tr>
                </thead>
                <tbody>
                <?php
                    
                    foreach ($listaProducto as $objProducto) {                         
                        echo '<tr>
                        <th scope="row">'.$objProducto->getIdproducto().'</th>';
                        echo '
                        <td>'.$objProducto->getPronombre().'</td>';
                        echo '
                        <td>'.$objProducto->getProdetalle().'</td>';
                        echo '
                        <td>'.$objProducto->getProcantstock().'</td>';
                        echo '
                        <td>'.$objProducto->getTipo().'</td>';
                        echo '
                        <td>'.$objProducto->getPrecio().'</td>';
                       
                        echo '<td><a href="editarProducto.php?accion=editar&idproducto='.$objProducto->getIdproducto().'" class="btn btn-success">Editar</a></td>';
                       // echo '<td><a href="accionBorradoLogico.php?accion=borradoLogico&idproducto='.$objProducto->getIdproducto().'" class="btn btn-success">Deshabilitar</a></td>';
                       /*  echo '<td><a href="accionBuscarPersona.php?NroDni='.$objTabla->getNroDni().'" class="btn btn-primary"><i class="bi bi-pencil-square"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                      </svg></i></a></td>';
                        //personaresult.php?accion=borrar&NroDni='.$objTabla->getNroDni().'
                        echo '<td><a href="ActualizarDatosPersona.php?accion=borrar&NroDni='.$objTabla->getNroDni().'" class="btn btn-warning"><i class="bi bi-trash-fill"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                        <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                      </svg></i></a></td></tr>'; 
                      */  
                           echo'</tr>';
                  
                     }
                    //fin foreach
                    echo '    </tbody>
                    </table>';
                }
                else{

                    echo "<h3>No hay productos registrados </h3>";
                }
                
                ?>
            
        
</div>
<div class="col-md-3">
            <a href="formProducto.php"class="btn btn-primary mb-4">Nuevo Producto</a>
        </div>
</div>
<div>
<?php
include ("../../Vista/estructura/pie.php");
?>
</div>