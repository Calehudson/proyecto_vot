(function($) {
    "use strict";

    var dlabChartlist = function() {
        
        var screenWidth = $(window).width();
        
        function fetchDataAndRenderChart() {
            $.get('http://localhost:8000/api/votaciones/porcentaje', function (response) { 
                console.log("📥 Respuesta de la API (porcentaje):", response); // ✅ REGISTRO EN CONSOLA
        
                if (response.status !== "success") {
                    console.error("❌ Error en la API: Respuesta inesperada", response);
                    return;
                }
        
                var nombres = []; 
                var porcape = []; 
                var porcaul = [];
        
                // 🔹 Verifica si response.data tiene datos
                if (!Array.isArray(response.data) || response.data.length === 0) {
                    console.error("❌ La API no devolvió datos válidos:", response);
                    return;
                }
        
                // 🔹 Extraer los datos correctamente
                response.data.forEach(item => {
                    nombres.push(item.par_nombre); 
                    porcape.push(parseFloat(item.porcentaje_hasta_penultima)); // ✅ Convertir a número
                    porcaul.push(parseFloat(item.porcentaje_hasta_hoy)); // ✅ Convertir a número
                });
               
                // 🔹 Renderizar el gráfico con los datos obtenidos
                renderActivityChart(nombres, porcape, porcaul);
            }, 'json').fail(function(xhr, status, error) {
                console.error("❌ Error en la petición AJAX:", xhr.responseText);
            });
        }
        

        // 🔹 Función para renderizar el gráfico
        function renderActivityChart(nombres, porcape, porcaul) {
            var optionsArea = {
                series: [
                    {
                        name: "B",
                        data: porcape // 🔹 Asigna los datos de porcentaje hasta penúltima
                    },
                    {
                        name: "A",
                        data: porcaul // 🔹 Asigna los datos de porcentaje hasta última
                    }
                ],
                chart: {
                    height: 300,
                    type: 'area',
                    group: 'social',
                    toolbar: { show: false },
                    zoom: { enabled: false }
                },
                dataLabels: { enabled: false },
                stroke: {
                    width: [3, 3],
                    colors:['var(--secondary)','var(--primary)'],
                    curve: 'straight'
                },
                xaxis: {
                    categories: nombres, // 🔹 Asigna los nombres de los participantes
                    labels: {
                        style: {
                            colors: '#3E4954',
                            fontSize: '14px',
                            fontFamily: 'Poppins',
                            fontWeight: 100
                        }
                    },
                    axisBorder:{ show: false }
                },
                yaxis: {
                    labels: {
                        minWidth: 20,
                        offsetX:-16,
                        style: {
                            colors: '#3E4954',
                            fontSize: '14px',
                            fontFamily: 'Poppins',
                            fontWeight: 100
                        }
                    }
                },
                colors:['#1EA7C5','#FF9432'],
                grid: {
                    borderColor: '#f1f1f1',
                    xaxis: { lines: { show: true } },
                    yaxis: { lines: { show: false } }
                },
                tooltip: {  // 🔹 Solo muestra el valor sin texto adicional
                    y: { formatter: function (val) { return val; } }
                },
                responsive: [{
                    breakpoint: 1602,
                    options: {
                        markers: {
                            size: [6,6],
                            hover: { size: 7 }
                        },
                        chart: { height: 230 }
                    }
                }]
            };

            // 🔹 Renderizar el gráfico
            var chartArea = new ApexCharts(document.querySelector("#activity2"), optionsArea);
            chartArea.render();
        }

        /* Function ============ */
        return {
            init: function(){},
            
            load: function(){                
                fetchDataAndRenderChart(); // 🔹 Llama a la función para obtener los datos y renderizar el gráfico
            },
            
            resize: function(){}
        }
    
    }();

    /* Cargar el gráfico cuando la página esté lista */
    jQuery(window).on('load',function(){
        setTimeout(function(){
            dlabChartlist.load();
        }, 1000); 
    });

})(jQuery);



$(document).ready(function() {
    $.getJSON('http://localhost:8000/api/votaciones/total')
        .done(function(response) {
            if (response.status !== "success" || !Array.isArray(response.data) || response.data.length === 0) {
                console.error("❌ Respuesta no válida o datos vacíos:", response);
                return;
            }

            var datos = response.data[0]; // Extrae los datos del primer objeto

            // Verifica y asigna los valores
            var votoElem = document.getElementById("votostotales");
            var visitaElem = document.getElementById("visitastotales");
            var interElem = document.getElementById("intertotales");

            if (votoElem) votoElem.innerText = datos.totvotos;
            if (visitaElem) visitaElem.innerText = datos.totvisitas;
            if (interElem) interElem.innerText = datos.totinter;
        })
        .fail(function(xhr, status, error) {
            console.error("❌ Error al obtener total de datos:", xhr.responseText);
        });
});





// 🔹 Registrar visita en el microservicio
document.addEventListener("DOMContentLoaded", function () {
    fetch('http://localhost:8000/api/votaciones/visita', { 
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: new URLSearchParams({ 'url': window.location.href })
    })
    .then(response => response.json())
    .then(data => console.log("✅ Visita registrada:", data))
    .catch(error => console.error("❌ Error al registrar visita:", error));
});




