<?php 


include_once "../../../configuracion.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$objAbmUsuario = new ABMUsuario();
$param["idusuario"]=24;
$listaUsuario=$objAbmUsuario->buscar($param);
$objUsuario = $listaUsuario[0];
enviarMail($objUsuario);
function enviarMail($objUsuario)
{
$mail = new PHPMailer(true);

        try {
        
            $emailCliente=$objUsuario->getusmail();
            $estado="aceptada";
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
            //Archivos adjuntos
            $mail->addAttachment('../../css/images/logo-sis-text-2-(800p).png', 'Comunicado');      
            $mail->isHTML(true);
            $mail->Subject = 'Su compra ha sido '.$estado;
            $mail->Body    = 'El estado de su compra cambio a ' .$estado; 

            $mail->send();
           // echo 'El mensaje ha sido enviado correctamente';
        } catch (Exception $e) {
           // echo "Ha ocurrido un error al enviar el mensaje: {$mail->ErrorInfo}";
        }
    }
?>