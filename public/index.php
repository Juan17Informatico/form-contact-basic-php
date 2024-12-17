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
        <h1 class="h1-form" >Formulario de Contacto</h1>
    </header>
    <main class="main-container" >
        <form action="../src/Contact.php" method="post" class="form-container" >
            <label for="name" class="label-form" >Nombre:</label>
            <input type="text" class="input-form" name="name" id="name" placeholder="Juan Pablo" required >

            <label for="email" class="label-form" >Correo Electrónico:</label>
            <input type="text" class="input-form" name="email" id="email" placeholder="juancampuzano@gmail.com" required >
            
            <label for="message" class="label-form" >Mensaje:</label>
            <textarea class="textarea-form" name="message" id="message" rows="5" ></textarea>
        
            <button type="submit" class="submit-btn-form" >Enviar</button>
        </form>
    </main>
    <!-- <footer class="footer-container"> 
        <p class="footer-text" >@Copyright - 2024</p>
        <p class="footer-text" >Juan Campuzano</p>
    </footer> -->

    <script src="public/js/scripts.js" ></script>
</body>

</html>