<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recogemos y saneamos los datos
    $nombre   = strip_tags(trim($_POST['nombre']));
    $email    = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $telefono = strip_tags(trim($_POST['telefono']));
    $mensaje  = trim($_POST['mensaje']);

    // Destino y asunto
    $to      = 'javierccc8@gmail.com';
    $subject = "Nuevo mensaje de contacto de $nombre";

    // Cuerpo del correo
    $body  = "Has recibido un nuevo mensaje desde el formulario de contacto:\n\n";
    $body .= "Nombre: $nombre\n";
    $body .= "Email: $email\n";
    $body .= "Teléfono: $telefono\n\n";
    $body .= "Mensaje:\n$mensaje\n";

    // Cabeceras
    $headers  = "From: $nombre <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Enviamos
    if (mail($to, $subject, $body, $headers)) {
        // Redirigimos de vuelta con parámetro de éxito
        header('Location: index.php?enviado=1#contacto');
        exit;
    } else {
        // Redirigimos con error
        header('Location: index.php?enviado=0#contacto');
        exit;
    }
}
?>
