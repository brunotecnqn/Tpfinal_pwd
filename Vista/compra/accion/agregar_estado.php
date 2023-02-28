<?php
include_once "../../../configuracion.php";
//$idusuario=2;
//$idcompraestadotipo=1;
  
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function enviarMail($objUsuario,$idcompraestadotipo)
{
$mail = new PHPMailer(true);

        try {
            $objCtrlCET=new ABMcompraestadotipo();  
            $param["idcompraestadotipo"]=$idcompraestadotipo;
            $lista=$objCtrlCET->buscar($param);
            $objCET=$lista[0];
            $emailCliente=$objUsuario->getusmail();
            $estado=$objCET->getCetdescripcion();
            //Configuracion del servidor SMTP
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            /*********************USANDO UNA SANDBOX****************/
            $mail->Host       =  'sandbox.smtp.mailtrap.io';
            $mail->SMTPAuth   = true;
            $mail->Username   = '78c7a2cf766015';
            $mail->Password   = '8cd496cbaf6bde';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = 2525;
            /********************************************************/
            //Remitente del correo
            $mail->setFrom('br1uno01one@gmail.com', 'Empresa');
            //Destinatario
            $mail->addAddress($emailCliente, 'Cliente');
            //Archivos adjuntos(opcional, depende si esta disponible en el host)
            $mail->addAttachment('../../css/images/logo-sis-text-2-(800p).png', 'Comunicado');      
            $mail->isHTML(true);
            $mail->Subject = 'Su compra ha sido '.$estado;
            $mail->Body    = 'El estado de su compra cambio a ' .$estado; 

            $mail->send();
            $res ='El mensaje ha sido enviado correctamente';
        } catch (Exception $e) {
            $res="Ha ocurrido un error al enviar el mensaje: {$mail->ErrorInfo}";
        }
        return $res;
    }

$datos=data_submitted();
$objSesion=new Session(); 
$idusuario=$objSesion->getUsuario()->getIdusuario();
$datos["idusuario"]=$idusuario;

$respuesta=[];

$objAbmUsuario = new ABMUsuario();
$listaUsuario=$objAbmUsuario->buscar($datos);
$objUsuario = $listaUsuario[0];
if($datos["idcompraestadotipo"]>0)
{
$retorno['msgMail'] =enviarMail($objUsuario,$datos["idcompraestadotipo"]);
}
if (isset($datos["idcompra"])){
    
      
    $objCtrlCE=new ABMcompraestado();  
    $objCtrlCI=new ABMcompraitem();  
    $respuesta= $objCtrlCE->cambiarEstado($datos); 
    if($datos["idcompraestadotipo"]==4)
    {
       $data["idcompra"]=$datos["idcompra"];
       $objCtrlCI->devolverProductos($data);
    }
      
   

}
else{ $mensaje="no se pudo concretar";
}
$retorno['respuesta'] = $respuesta["seagrego"];
$retorno['seactualizo'] = $respuesta["seactualizo"];
if (isset($mensaje)){
   
    $retorno['errorMsg']=$mensaje;

}
    echo json_encode($retorno);
