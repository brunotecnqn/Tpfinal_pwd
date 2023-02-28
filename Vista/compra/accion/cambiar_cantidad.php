<?php
include_once "../../../configuracion.php";
$valores=data_submitted();
/*$cantidad = 1;
$idcompraitem = 119;
$valores["idcompraitem"]=$idcompraitem;
$valores["cantNueva"]=$cantidad;
$valores["opc"]=1;*/
$objControlCI=new ABMcompraitem();
$res=$objControlCI->cambiarCantidadItem2($valores);


//$retorno["resultado"]=$res;




echo $res;
?>