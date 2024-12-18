<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Contacto Básico</title>
    <link rel="shortcut icon" href="public/images/application.png" type="image/x-icon">
    <link rel="stylesheet" href="public/css/styles.css">
</head>

<body>

    <header class="header-container">
        <h1 class="h1-form">Formulario de Contacto</h1>
    </header>
    <main class="main-container">
        <form action="../src/Contact.php" method="post" class="form-container">
            <label for="name" class="label-form">Nombre:</label>
            <input type="text" class="input-form" name="name" id="name" placeholder="Juan Pablo" required>

            <label for="email" class="label-form">Correo Electrónico:</label>
            <input type="text" class="input-form" name="email" id="email" placeholder="example@gmail.com" required>

            <label for="message" class="label-form">Mensaje:</label>
            <textarea class="textarea-form" name="message" id="message" rows="5"></textarea>

            <button type="submit" class="submit-btn-form">Enviar</button>
        </form>
    </main>

    <footer class="footer-container">
        <p class="footer-text">JuanCM - Juan Campuzano</p>
        <a href="https://github.com/Juan17Informatico" class="footer-link" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8" />
            </svg>
        </a>
        <p class="footer-text">@Copyright - 2024</p>
    </footer>

    <script src="public/js/scripts.js"></script>
</body>

</html>