<?php 


include_once "../../../configuracion.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function enviarMail($objUsuario,$idcompra,$idcompraestadotipo)
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
            $mail->Subject = 'Nro. pedido:'.$idcompra.', su compra ha sido '.$estado;
            $mail->Body    = 'El estado de su compra cambio a ' .$estado; 

            $mail->send();
            $res ='El mensaje ha sido enviado correctamente';
        } catch (Exception $e) {
            $res="Ha ocurrido un error al enviar el mensaje: {$mail->ErrorInfo}";
        }
        return $res;
    }

?>