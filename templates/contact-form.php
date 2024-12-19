<form action="../src/Contact.php" method="post" class="form-container">
    <label for="name" class="label-form">Nombre:</label>
    <input type="text" class="input-form" name="name" id="name" placeholder="Juan Pablo" required>

    <label for="email" class="label-form">Correo Electrónico:</label>
    <input type="text" class="input-form" name="email" id="email" placeholder="example@gmail.com" required>

    <label for="message" class="label-form">Mensaje:</label>
    <textarea class="textarea-form" name="message" id="message" rows="5"></textarea>

    <button type="submit" class="submit-btn-form">Enviar</button>
</form>