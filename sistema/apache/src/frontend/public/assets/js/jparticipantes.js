$('#tablaparticipantes').DataTable({
    'paging': false,
    'lengthChange': false,
    'info': false,
    'filter': true,
    'stateSave': true,
    'ajax': {
        "url": "http://localhost:8000/api/microservice1/participantes",
        "type": "GET",
        "dataSrc": "data"  // 🔹 Ajuste aquí si la API devuelve {"status": "success", "data": [...]}
    },
    'columns': [
        {
            "orderable": true,
            "render": function (data, type, row) {
                let participante = row.par_nombre + ' ' + row.par_apellidos;
                let foto = "public/assets/images/courses/" + row.par_foto;
                return `<td><div class='d-flex align-items-center'><img src="${foto}"><h4 class='mb-0 fs-16 font-w500'>${participante}</h4></div></td>`;
            }
        },
        { "data": "par_pais" },
        { "data": "par_sexo" },
        {
            "orderable": true,
            "className": "text-start",
            "render": function (data, type, row) {
                return row.par_edad + " años";
            }
        },
        {
            "orderable": true,
            "className": "text-start",
            "render": function (data, type, row) {
                return row.categorias;
            }
        }
    ],
    "order": [[1, "asc"]],
    "language": {
        "sProcessing": "Procesando...",
        "sZeroRecords": "No se encontraron resultados",
        "sEmptyTable": "Ningún dato disponible en esta tabla"
    }
});

document.addEventListener("DOMContentLoaded", function () {
    fetch('http://localhost:8000/api/microservice2/votaciones/visita', { 
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: new URLSearchParams({
            'url': window.location.href // Captura la URL visitada
        })
    })
    .then(response => {
        if (!response.ok) {
            throw new Error("Error en la solicitud");
        }
        return response.json();
    })
    .then(data => console.log("✅ Visita registrada:", data))
    .catch(error => console.error("❌ Error al registrar visita:", error));
});

