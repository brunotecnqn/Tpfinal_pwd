<?php
include_once "../../../configuracion.php";
require_once("enviarMail.php");
  


$datos=data_submitted();

//$respuesta=[];
if (isset($datos["idcompra"])){

$objCtrlCE=new ABMcompraestado();  
$retorno= $objCtrlCE->actualizarEstadoCompra($datos);
}

/*

if (isset($datos["idcompra"])){
    
      
    $objCtrlCE=new ABMcompraestado();  
    $objCtrlCI=new ABMcompraitem();  
    $objCtrlC=new ABMcompra();  
    $val["idcompra"]=$datos["idcompra"];
    $listaC=$objCtrlC->buscar($val);
    $objC=$listaC[0];
    $respuesta= $objCtrlCE->cambiarEstado($datos); 
    if($datos["idcompraestadotipo"]==4)
    {
       $data["idcompra"]=$datos["idcompra"];
       $objCtrlCI->devolverProductos($data);
    }
   
    $objUsuario = $objC->getObjUsuario();
    //si la compra ya no esta en confeccion
    if($datos["idcompraestadotipo"]>0)
    {
    $retorno['msgMail'] =enviarMail($objUsuario,$datos["idcompra"],$datos["idcompraestadotipo"]);
    }
   

}
else{ $mensaje="no se pudo concretar";
}
$retorno['respuesta'] = $respuesta["seagrego"];
$retorno['seactualizo'] = $respuesta["seactualizo"];
if (isset($mensaje)){
   
    $retorno['errorMsg']=$mensaje;

}

*/
    echo json_encode($retorno);
