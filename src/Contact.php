<?php

require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/Mailer.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Capturar y sanitizar datos del formulario
    $name = htmlspecialchars(trim($_POST['name'] ?? ''));
    $email = filter_var(trim($_POST['email'] ?? ''), FILTER_VALIDATE_EMAIL);
    $message = htmlspecialchars(trim($_POST['message'] ?? ''));

    // Validación básica
    if (!$name || !$email || !$message) {
        showResponse('error', 'Todos los campos son obligatorios y deben ser válidos.');
        exit;
    }

    // Guardar en la base de datos
    try {
        $db = (new Database())->getConnection();
<<<<<<< HEAD
        $stmt = $db->prepare("INSERT INTO contacts (name, email, message) VALUES (:name, :email, :message)");
=======
        $stmt = $db->prepare("INSERT INTO contact_form (name, email, message) VALUES (:name, :email, :message)");
>>>>>>> 3368f680fed27161e46312b5b6d32b2be17e3e96
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':message', $message);
        $stmt->execute();
    } catch (Exception $e) {
        showResponse('error', 'No se pudo guardar la información en la base de datos.');
        error_log("Error en la base de datos: " . $e->getMessage());
        exit;
    }

    // Enviar correo electrónico
    try {
        $mailer = new Mailer();
        $mailer->send($email, "Nuevo mensaje de $name", $message);
    } catch (Exception $e) {
        showResponse('error', 'No se pudo enviar el correo electrónico.');
        error_log("Error al enviar correo: " . $e->getMessage());
        exit;
    }

    // Respuesta de éxito
    showResponse('success', 'Tu mensaje se ha enviado correctamente. ¡Gracias por contactarnos!');
    exit;
} else {
    // Si no es POST, redirigir al formulario
    header('Location: /');
    exit;
}

/**
 * Mostrar respuesta en HTML
 *
 * @param string $status "success" o "error"
 * @param string $message Mensaje a mostrar
 */
function showResponse(string $status, string $message): void
{
    $title = $status === 'success' ? 'Éxito' : 'Error';
    $color = $status === 'success' ? 'green' : 'red';
    echo <<<HTML
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado del Formulario</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 50px;
        }
        .message {
            color: $color;
            font-size: 1.5em;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            text-decoration: none;
            color: white;
            background-color: $color;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <h1>$title</h1>
    <p class="message">$message</p>
    <a href="../public">Volver al formulario</a>
</body>
</html>
HTML;
}