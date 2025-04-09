(function($) {
    "use strict";

    var dlabDataHandler = function() {

        var screenWidth = $(window).width();

        // 🔹 Obtener la lista de participantes
        function fetchParticipantes() {
            $.get('http://localhost:8000/api/participantes/lista', function (response) { 
                console.log("📥 Respuesta de la API (participantes):", response);

                if (response.status !== "success") {
                    console.error("❌ Error en la API: Respuesta inesperada", response);
                    return;
                }

                var nombres = []; 
                var btnvota = [];

                if (!Array.isArray(response.data) || response.data.length === 0) {
                    console.error("❌ La API no devolvió datos válidos:", response);
                    return;
                }

                response.data.forEach((item, i) => {
                    nombres[i] = item.par_nombre + ' ' + item.par_apellidos;
                    btnvota[i] = 'Vota por ' + item.par_nombre;

                    var imgSrc = 'public/assets/images/courses/' + item.par_foto;
                    var imgElemento = document.getElementById('foto' + (i + 1));
                    if (imgElemento) imgElemento.src = imgSrc;

                    var categorias = item.categorias ? item.categorias.split(', ') : [];
                    categorias.forEach((cat, j) => {
                        var catID = 'categoria' + (i + 1) + '_' + (j + 1);
                        var catElemento = document.getElementById(catID);
                        if (catElemento) catElemento.innerText = cat;
                    });

                    // 🔹 Obtener votos y puesto
                    $.get('http://localhost:8000/api/votaciones/resultados/'+item.par_codigo, function (votosData) {
                        console.log(`📥 Datos de votos para ${item.par_codigo}:`, votosData);

                        // 🔹 Verificar que la respuesta es válida y contiene datos
                        if (!votosData || votosData.status !== "success" || !Array.isArray(votosData.data) || votosData.data.length === 0) {
                            console.error(`❌ La API no devolvió datos válidos para ${item.par_codigo}:`, votosData);
                            return;
                        }

                        var participanteData = votosData.data[0]; // Extraer el primer objeto del array

                        // 🔹 Asignar valores solo si los elementos existen en el HTML
                        var puestoElemento = document.getElementById('puesto' + (i + 1));
                        if (puestoElemento && participanteData.puesto) {
                            puestoElemento.innerText = participanteData.puesto;
                        }

                        var votosElemento = document.getElementById('votos' + (i + 1));
                        if (votosElemento && participanteData.votos) {
                            votosElemento.innerText = participanteData.votos;
                        }

                    }, 'json').fail(function(xhr) {
                        console.error(`❌ Error al obtener los votos para ${item.par_codigo}:`, xhr.responseText);
                    });


                });

                nombres.forEach((nombre, j) => {
                    var nombreElemento = document.getElementById('nombre' + (j + 1));
                    if (nombreElemento) nombreElemento.innerText = nombre;
                });

                btnvota.forEach((texto, j) => {
                    var botonElemento = document.getElementById('btnvota' + (j + 1));
                    if (botonElemento) botonElemento.innerText = texto;
                });

            }, 'json').fail(function(xhr) {
                console.error("❌ Error en la API (participantes):", xhr.responseText);
            });
        }

        return {
            init: function(){},
            load: function(){ fetchParticipantes(); },
            resize: function(){}
        }

    }();

    // 🔹 Cargar datos cuando la página esté lista
    jQuery(window).on('load',function(){
        setTimeout(function(){
            dlabDataHandler.load();
        }, 1000);
    });

})(jQuery);

// 🔹 Registrar visitas en el microservicio
document.addEventListener("DOMContentLoaded", function () {
    fetch('http://localhost:8000/api/votaciones/visita', { 
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: new URLSearchParams({ 'url': window.location.href })
    })
    .then(response => response.json())
    .then(data => console.log("✅ Visita registrada:", data))
    .catch(error => console.error("❌ Error al registrar visita:", error));
});

// 🔹 Registrar un voto
function votarPorParticipante(par_codigo) {
    var nombreElemento = document.getElementById("nombre" + par_codigo);
    var par_nombre = nombreElemento ? nombreElemento.innerText : "Participante desconocido";

    fetch('http://localhost:8000/api/votaciones/voto', {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: new URLSearchParams({ 'par_codigo': par_codigo })
    })
    .then(response => response.json()) // Convertir la respuesta a JSON
    .then(data => {
        console.log("📥 Respuesta del servidor:", data); // 🔹 Debugging

        if (data && data.status === 'ok') {
            alert("✅ " + data.message);
            location.reload();
        } else {
            alert("❌ " + (data.message || "Error desconocido"));
        }
    })
    .catch(error => {
        console.error("❌ Error en la petición AJAX:", error);
        alert("❌ No se pudo registrar el voto.");
    });
}


$('#tablavotaciones').DataTable({
    'paging': true,
    'info': true,
    'filter': true,
    'stateSave': true,
    'ajax': {
        "url": "http://localhost:8000/api/votaciones/listavotaciones",
        "type": "GET",
        "dataSrc": "data",
        "beforeSend": function (request) {
            let token = localStorage.getItem("token");
            if (token) {
                request.setRequestHeader("Authorization", "Bearer " + token);
            } else {
                alert("⚠️ No tienes permiso para acceder a esta información. auto");
                window.location.href = "/"; // Redirigir al login si no hay token
            }
        },
        "error": function (xhr, status, error) {
            console.error("Error en AJAX:", xhr.responseText); // Para depuración
            if (xhr.status === 403) {
                alert("⚠️ No tienes permiso para acceder a esta información. ajax");
                window.location.href = "/"; // Redirigir al login si el acceso es denegado
            }
        }
    },
    'columns': [
        { "data": "vot_codigo" },
        { "data": "participante" },
        { "data": "vot_ip" },
        { "data": "fecha" },
        {
            "orderable": true,
            "className": "text-start",
            "render": function (data, type, row) {
                let codigo = row.vot_codigo;
                return `<td><a href="#" onclick="borravoto('${codigo}')">
                            <i class="fa fa-trash"></i>
                        </a></td>`;
            }
        }
    ],
    "order": [[1, "asc"]],
    "language": {
       "sProcessing": "Procesando...",
        "sLengthMenu": "Mostrar _MENU_ registros",
        "sZeroRecords": "No se encontraron resultados",
        "sEmptyTable": "Ningún dato disponible en esta tabla",
        "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
        "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
        "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
        "sInfoPostFix": "",
        "sSearch": "Buscar:",
        "sUrl": "",
        "sInfoThousands": ",",
        "sLoadingRecords": "Cargando...",
        "oPaginate": {
            "sFirst": "Primero",
            "sLast": "Último",
            "sNext": "Sig.",
            "sPrevious": "Ant."
        },
        "oAria": {
            "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
            "sSortDescending": ": Activar para ordenar la columna de manera descendente"
        }
    }
});


function borravoto(codigo) {
    if (confirm("¿Estás seguro de que deseas eliminar este voto? Esta acción no se puede deshacer.")) {
        let token = localStorage.getItem("token");

        if (!token) {
            alert("⚠️ No tienes permiso para realizar esta acción.");
            window.location.href = "/listavotaciones";
            return;
        }

        fetch("http://localhost:8000/api/votaciones/borravoto", {
            method: "DELETE",
            headers: {
                "Content-Type": "application/json",
                "Authorization": "Bearer " + token // 🔹 Agrega el token aquí
            },
            body: JSON.stringify({ vot_codigo: codigo }) // 🔹 Enviar el código del voto a eliminar
        })
        .then(response => {
            if (response.status === 401 || response.status === 403) {
                alert("⚠️ No tienes permiso para eliminar votos.");
                window.location.href = "/listavotaciones";
                return;
            }
            return response.json();
        })
        .then(data => {
            if (data.status === "success") {
                alert("✅ Voto eliminado correctamente.");
                location.reload(); // 🔹 Recargar la página para actualizar la lista
            } else {
                alert("❌ Error al eliminar el voto: " + data.message);
            }
        })
        .catch(error => {
            console.error("Error en la solicitud:", error);
            alert("❌ Ocurrió un error al comunicarse con el servidor.");
        });
    }
}




