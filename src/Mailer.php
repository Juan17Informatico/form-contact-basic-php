<?php

require_once __DIR__ . '/../vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

class Mailer
{
    private $mail;

    public function __construct(string $fromAddres, string $fromName)
    {
        $this->mail = new PHPMailer(true);

        try {
            // Configuración del servidor
            $this->mail->isSMTP();
            $this->mail->Host = $_ENV['MAIL_HOST'];
            $this->mail->SMTPAuth = true;
            $this->mail->Username = $_ENV['MAIL_USERNAME'];
            $this->mail->Password = $_ENV['MAIL_PASSWORD'];
            $this->mail->SMTPSecure = $_ENV['MAIL_ENCRYPTION'];
            $this->mail->Port = $_ENV['MAIL_PORT'];

            // Remitente predeterminado
            $this->mail->setFrom($fromAddres, $fromName);
        } catch (Exception $e) {
            error_log("Error en la configuración de PHPMailer: " . $e->getMessage());
            throw $e;
        }
    }

    public function send(string $to, string $subject, string $body): void
    {
        try {
            $this->mail->addAddress($to);
            $this->mail->isHTML(true);
            $this->mail->Subject = $subject;
            $this->mail->Body = $body;

            $this->mail->send();
        } catch (Exception $e) {
            error_log("Error al enviar correo: " . $e->getMessage());
            throw $e;
        }
    }
}
