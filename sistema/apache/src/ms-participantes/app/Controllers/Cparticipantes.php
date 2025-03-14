<?php
namespace App\Controllers;
use CodeIgniter\RESTful\ResourceController;

class Cparticipantes extends ResourceController {

    protected $modelName = 'App\Models\Mparticipantes'; // 🔹 Correcta inicialización del modelo
    protected $format    = 'json';

    public function index() {
        try {
            $participantes = $this->model->obtenerParticipantes(); // 🔹 Usa $this->model correctamente
            
            // 🔹 Manejar el caso en que no haya participantes
            if (empty($participantes)) {
                return $this->respond(["message" => "No hay participantes disponibles"], 204);
            }

            return $this->respond(["status" => "success", "data" => $participantes], 200);
        } catch (\Exception $e) {
            return $this->respond(["status" => "error", "message" => "Error en el servidor", "error" => $e->getMessage()], 500);
        }
    }
}

