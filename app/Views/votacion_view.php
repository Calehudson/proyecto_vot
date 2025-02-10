<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Votación Operación Triunfo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f8f9fa;
            padding: 20px;
        }
        .voting-container {
            max-width: 600px;
            margin: 0 auto;
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .candidate {
            margin-bottom: 10px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            display: flex;
            align-items: center;
        }
        .candidate input[type="radio"] {
            margin-right: 10px;
        }
        button {
            padding: 10px 20px;
            background: #28a745;
            border: none;
            color: #fff;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background: #218838;
        }
        .results {
            margin-top: 20px;
        }
        .result-container {
            margin-bottom: 15px;
        }
        .result-bar {
            background: #007bff;
            height: 20px;
            border-radius: 4px;
            text-align: center;
            color: #fff;
            line-height: 20px;
        }
    </style>
</head>
<body>
<div class="voting-container">
    <h1>Votación Operación Triunfo</h1>
    <form id="voteForm">
    <?= csrf_field() ?>
        <?php foreach($candidatos as $candidato): ?>
            <div class="candidate">
                <input type="radio" name="candidato_id" value="<?= esc($candidato['id']) ?>" id="candidato_<?= esc($candidato['id']) ?>">
                <label for="candidato_<?= esc($candidato['id']) ?>"><?= esc($candidato['nombre']) ?></label>
            </div>
        <?php endforeach; ?>
        <button type="submit">Votar</button>
    </form>

    <div class="results" id="results">
        <!-- Aquí se mostrarán los resultados -->
    </div>
</div>

<script>
// Al enviar el formulario se hace un POST vía AJAX para registrar el voto.
document.getElementById('voteForm').addEventListener('submit', function(e) {
    e.preventDefault();
    console.log("Evento submit capturado");
    let formData = new FormData(this);
    
    fetch('<?= base_url("votacion/vote") ?>', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        console.log("Respuesta del servidor:", data);
        if (data.status === 'success') {
            mostrarResultados(data.results);
        } else {
            alert(data.message);
        }
    })
    .catch(error => console.error('Error:', error));
});


function mostrarResultados(results) {
    const resultsDiv = document.getElementById('results');
    resultsDiv.innerHTML = '<h2>Resultados</h2>';
    results.forEach(function(item) {
        const container = document.createElement('div');
        container.classList.add('result-container');

        const label = document.createElement('div');
        label.textContent = item.nombre + ': ' + item.votos + ' votos (' + item.porcentaje + '%)';
        container.appendChild(label);

        const bar = document.createElement('div');
        bar.classList.add('result-bar');
        bar.style.width = item.porcentaje + '%';
        bar.textContent = item.porcentaje + '%';
        container.appendChild(bar);

        resultsDiv.appendChild(container);
    });
}
</script>
</body>
</html>
