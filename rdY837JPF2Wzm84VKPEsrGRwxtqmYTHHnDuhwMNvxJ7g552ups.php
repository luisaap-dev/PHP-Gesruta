<?php
// Carga la biblioteca PHPMailer
require 'vendor/autoload.php';

echo("asd");

// Verifica si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recupera los datos del formulario
    $nombreEmpresa = $_POST['nombre_empresa'];
    $nombreContacto = $_POST['nombre_contacto'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $mensaje = $_POST['mensaje'];

    // Crea una instancia de PHPMailer
    $phpmailer = new PHPMailer\PHPMailer\PHPMailer();

    // Configura PHPMailer para usar SMTP
    $phpmailer->isSMTP();

    // Configura el servidor SMTP de Mailtrap
    $phpmailer->Host = 'sandbox.smtp.mailtrap.io';
    $phpmailer->SMTPAuth = true;
    $phpmailer->Port = 2525;
    $phpmailer->Username = '5bbe8dd13672af';
    $phpmailer->Password = '6de3f9a56ad208';
    

    // Configura el remitente y el destinatario del correo electrónico
    $phpmailer->setFrom($correo, $nombreContacto);
    $phpmailer->addAddress('destinatario@g.com', 'Nombre del Destinatario');

    // Asigna el asunto y el cuerpo del correo
    $phpmailer->Subject = 'Mensaje de contacto desde ' . $nombreEmpresa;
    $phpmailer->Body    = 'Nombre de la Empresa: ' . $nombreEmpresa . '<br>' .
                           'Persona de Contacto: ' . $nombreContacto . '<br>' .
                           'Correo Electrónico: ' . $correo . '<br>' .
                           'Teléfono: ' . $telefono . '<br>' .
                           'Mensaje: ' . $mensaje;

    // Configura el correo para que sea en formato HTML
    $phpmailer->isHTML(true);

    // Intenta enviar el correo
    if ($phpmailer->send()) {
        header("Location: https://www.luisaap.es/");
    } else {
        echo 'Error al enviar el correo: ' . $phpmailer->ErrorInfo;
    }
}
?>
