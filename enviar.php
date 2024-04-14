<?php
// Verificar si se han enviado datos por POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];

    // Destinatario del correo
    $destinatario = "valentinotalanchuk@gmail.com"; // Cambia esto con tu dirección de correo electrónico

    // Asunto del correo
    $asunto = "Nuevo mensaje de contacto desde el formulario de tu portafolio";

    // Construir el cuerpo del correo
    $cuerpo = "Nombre: $nombre\n";
    $cuerpo .= "Correo electrónico: $email\n";
    $cuerpo .= "Mensaje:\n$mensaje\n";

    // Enviar el correo
    if (mail($destinatario, $asunto, $cuerpo)) {
        // Redirigir a una página de éxito si el correo se envió correctamente
        header('Location: exito.html');
    } else {
        // Redirigir a una página de error si hubo un problema al enviar el correo
        header('Location: error.html');
    }
}
?>