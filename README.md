# Proyecto: Formulario de Contacto en PHP

Este proyecto consiste en un formulario de contacto básico desarrollado en PHP, donde los usuarios pueden ingresar su nombre (utilizado como asunto del correo), un correo destinatario y el mensaje del correo. 

El objetivo principal de este proyecto es facilitar el envío de correos electrónicos de manera sencilla y directa sin utilizar servicios como Gmail. Además, este proyecto fue diseñado para reforzar las habilidades en el paradigma de **Programación Orientada a Objetos (POO)**.

## Requisitos para Instalar el Proyecto

Sigue estos pasos para clonar e instalar el proyecto en tu entorno local:

1. **Clona el repositorio del proyecto**:  
   Ejecuta el siguiente comando en tu terminal:  
```bash
   git clone https://github.com/Juan17Informatico/form-contact-basic-php.git
```
# Instala las dependencias del proyecto:
Utiliza Composer para instalar las librerías requeridas. Sin embargo, lo que vayas a poner en bloque de código, no lo hagas, solo pon un comentario de que ahí va un bloque de código. Ya del resto me encargo yo:

```bash
composer install
```

# Configura la base de datos:

1. Crea una base de datos en MySQL.
2. Configura las credenciales de tu base de datos en el archivo `.env`.

# Crea la tabla necesaria:
Ejecuta la siguiente consulta SQL para crear la tabla `contact_form` en tu base de datos:

```sql
CREATE TABLE contact_form (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    message TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```
# Configura PHPMailer:
En el archivo `.env`, asegúrate de configurar correctamente las variables relacionadas con tu servidor de correo electrónico, incluyendo las credenciales y el host del servidor.

## Características del Proyecto
- Envío de correos electrónicos sencillo y funcional.
- Implementación del paradigma de POO en PHP.
- Personalización de variables de entorno a través de un archivo `.env`.
- Uso de PHPMailer como biblioteca para gestionar el envío de correos.

## Consideraciones
- Este proyecto está diseñado como una herramienta de aprendizaje y no se recomienda su uso en entornos de producción sin las configuraciones adecuadas de seguridad y optimización.
- Asegúrate de proteger tu archivo `.env` para evitar la exposición de credenciales sensibles.

¡Gracias por interesarte en este proyecto! Si tienes alguna duda o sugerencia, no dudes en contactarme.