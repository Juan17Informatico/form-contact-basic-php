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

    <header>
        <h1>Formulario de Contacto</h1>
    </header>
    <main>
        <form action="../src/Contact.php" method="post" >
            <label for="name">Nombre:</label>
            <input type="text" name="name" id="name" required >

            <label for="email">Correo Electrónico:</label>
            <input type="text" name="email" id="email" required >
            
            <label for="message">Mensaje:</label>
            <textarea name="message" id="message" rows="5" ></textarea>
        
            <button type="submit" >Enviar</button>
        </form>
    </main>
    <footer></footer>

    <script src="public/js/scripts.js" ></script>
</body>

</html>