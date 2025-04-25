const API_BASE = `http://${window.location.hostname}:8000`;

function logea() {
    let usuario = document.getElementById('usuario').value;
    let password = document.getElementById('password').value;
    
    fetch('${API_BASE}/api/logeo/usuarios/login', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ 'usuario': usuario, 'password': password })
    })
    .then(response => response.json())
    .then(data => {
        console.log("Respuesta de la API:", data); // 🔹 Imprimir la respuesta

        if (data.status === 'success' && data.token) {
            localStorage.setItem('token', data.token);

            // 🔹 Verificar si `usuario` existe antes de acceder a sus propiedades
            if (data.usuario) {
                localStorage.setItem('nombreUsuario', data.usuario.usu_name || 'Usuario');
                localStorage.setItem('tipoUsuario', data.usuario.usu_tipo || 'Desconocido');
            }

            window.location.href = '/';
        } else {
            alert('⚠️ Credenciales incorrectas. Intenta nuevamente.');
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('⚠️ Error al conectar con el servidor. Verifica tu conexión.');
    });
}





