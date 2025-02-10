<?php
namespace App\Controllers;

use App\Models\Mcandidato;
use App\Models\Mvoto;

class Cvotacion extends BaseController
{
    public function index()
    {
        $candidatoModel = new Mcandidato();
        $candidatos = $candidatoModel->findAll();

        // Si no existen candidatos, se insertan 6 nombres por defecto.
        if (empty($candidatos)) {
            $defaultCandidates = [
                ['nombre' => 'Artista 1'],
                ['nombre' => 'Artista 2'],
                ['nombre' => 'Artista 3'],
                ['nombre' => 'Artista 4'],
                ['nombre' => 'Artista 5'],
                ['nombre' => 'Artista 6'],
            ];
            $candidatoModel->insertBatch($defaultCandidates);
            $candidatos = $candidatoModel->findAll();
        }

        return view('votacion_view', ['candidatos' => $candidatos]);
    }

    public function vote()
    {
        // Obtiene el método HTTP sin usar getMethod()
        if (strtoupper($this->request->getServer('REQUEST_METHOD')) === 'POST') {
            $candidato_id = $this->request->getPost('candidato_id');
    
            if (empty($candidato_id)) {
                return $this->response->setJSON([
                    'status'  => 'error',
                    'message' => 'No se seleccionó ningún candidato'
                ]);
            }
    
            // Registra el voto
            $votoModel = new \App\Models\Mvoto();
            $data = [
                'candidato_id' => $candidato_id
            ];
            $votoModel->insert($data);
    
            // Consulta los resultados actuales: votos por candidato
            $db = \Config\Database::connect();
            $builder = $db->table('candidatos');
            $builder->select('candidatos.id, candidatos.nombre, COUNT(votos.id) as votos');
            $builder->join('votos', 'candidatos.id = votos.candidato_id', 'left');
            $builder->groupBy('candidatos.id');
            $query = $builder->get();
            $results = $query->getResultArray();
    
            // Calcula el total de votos
            $totalVotes = 0;
            foreach ($results as $res) {
                $totalVotes += $res['votos'];
            }
    
            // Calcula el porcentaje para cada candidato
            foreach ($results as &$res) {
                $res['porcentaje'] = $totalVotes > 0 ? round(($res['votos'] * 100) / $totalVotes, 2) : 0;
            }
    
            return $this->response->setJSON([
                'status'  => 'success',
                'results' => $results
            ]);
        }
    }
    
    
}

?>
