document.addEventListener("DOMContentLoaded", function () {
    let token = localStorage.getItem("token");
    let nombreUsuario = localStorage.getItem("nombreUsuario");
    let tipoUsuario = localStorage.getItem("tipoUsuario");

    if (token) {
        document.getElementById("listavotos").style.display = "block";
        document.getElementById("cerrarsesion").style.display = "block";
        document.getElementById("logeo").style.display = "none";
        document.getElementById("votaciones").style.display = "none";

        // 🔹 Mostrar mensaje de bienvenida con los datos del usuario
        document.getElementById("mensajeBienvenida").style.display = "block";
        document.getElementById("nombreUsuario").innerText = nombreUsuario;
        document.getElementById("tipoUsuario").innerText = tipoUsuario;
    } else {
        document.getElementById("listavotos").style.display = "none";
        document.getElementById("cerrarsesion").style.display = "none";
        document.getElementById("logeo").style.display = "block";

        // 🔹 Ocultar el mensaje de bienvenida
        document.getElementById("mensajeBienvenida").style.display = "none";
    }
});


function cerrarsesion() {
    if (confirm("¿Seguro que deseas cerrar sesión?")) {
        localStorage.removeItem('token');
        localStorage.removeItem('nombreUsuario'); // 🔹 Eliminar el nombre
        localStorage.removeItem('tipoUsuario');   // 🔹 Eliminar el tipo de usuario
        alert("Has cerrado sesión correctamente.");
        window.location.href = '/logeo';  // Redirigir a la página de login
    }
}
