document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("form");
    form.addEventListener("submit", function (e) {
        alert("Formulario enviado. ¡Gracias!");
    });
});
