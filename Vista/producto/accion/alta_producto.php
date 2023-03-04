<?php
include_once "../../../configuracion.php";
$data = data_submitted();
$respuesta = false;

if (isset($data['pronombre'])&&isset($data['tipo'])){
  
    $objC = new ABMproducto();
    $respuesta = $objC->alta($data);
}
$retorno['respuesta'] = $respuesta;

if ($respuesta==false){
    
    $retorno['errorMsg']="No pudo crearse el producto";
    
}
echo json_encode($retorno);
?>