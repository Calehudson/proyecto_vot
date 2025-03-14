<?php
    namespace App\Controllers;
    use CodeIgniter\RESTful\ResourceController;
    
    class Cvotaciones extends ResourceController {
    
        protected $modelName = 'App\Models\Mvotaciones'; // Se define el modelo principal
        protected $format    = 'json';

        public $modelvot = NULL;
        public $modelvis = NULL;
        public $modelvts = NULL;
    
        public function __construct(){
            $this->modelvot = model('Mvotaciones');
            $this->modelvis = model('Mvisitas');
            $this->modelvts = model('Mvotos');
        }
    
        // 🔹 Obtener resultados de votaciones (GET)
        public function buscaresultados($parcod = null) {
    
            if (!$parcod) {
                return $this->failValidationErrors("Código de participante es requerido.");
            }
    
            try {
                $votopuesto = $this->modelvot->obtenerVotopuesto($parcod);
    
                if (!$votopuesto) {
                    return $this->failNotFound("No se encontraron resultados.");
                }
    
                return $this->respond(["status" => "success", "data" => $votopuesto], 200);
            } catch (\Exception $e) {
                return $this->failServerError("Error en el servidor: " . $e->getMessage());
            }
        }
    
        // 🔹 Obtener porcentaje de votos (GET)
        public function porcentajevotos() {    
            try {
                $datosporcentaje = $this->modelvot->obtenerPorcentajevotos();
    
                return $this->respond(["status" => "success", "data" => $datosporcentaje], 200);
            } catch (\Exception $e) {
                return $this->failServerError("Error en el servidor: " . $e->getMessage());
            }
        }
    
        // 🔹 Obtener total de datos (GET)
        public function totaldatos() {   
            try {
                $totalvot = $this->modelvot->obtenerTotaldatos();
    
                return $this->respond(["status" => "success", "data" => $totalvot], 200);
            } catch (\Exception $e) {
                return $this->failServerError("Error en el servidor: " . $e->getMessage());
            }
        }
    
        // 🔹 Registrar Visita (POST)
        public function registrarVisita() {    
            $data = [
                'vis_ip' => $this->request->getIPAddress(),
                'vis_url' => $this->request->getPost('url')
            ];
    
            if ($this->modelvis->insert($data)) {
                return $this->respondCreated(["status" => "ok", "message" => "Visita registrada"]);
            } else {
                return $this->failServerError("Error al registrar visita.");
            }
        }
    
        // 🔹 Registrar Voto (POST)
        public function registrarVoto() {
            $par_codigo = $this->request->getPost('par_codigo');
            $ip = $this->request->getIPAddress();

            if (!$par_codigo) {
                return $this->respond([
                    "status" => "error",
                    "message" => "Código de participante es requerido."
                ], 400);
            }

            // 🔹 Verificar si la IP ya votó
            $votoExistente = $this->modelvts->where('vot_ip', $ip)->first();
            if ($votoExistente) {
                return $this->respond([
                    "status" => "error",
                    "message" => "Ya has votado anteriormente."
                ], 409);
            }

            $data = ['par_codigo' => $par_codigo, 'vot_ip' => $ip];

            if ($this->modelvts->insert($data)) {
                return $this->respond([
                    "status" => "ok",
                    "message" => "Voto registrado correctamente."
                ], 201);
            } else {
                return $this->respond([
                    "status" => "error",
                    "message" => "Error al registrar el voto."
                ], 500);
            }
        }

        
    
        public function listavotaciones()
        {
            try {
                $listavotaciones = $this->model->obtenerVotaciones(); 
                
                // ✅ Manejo si la lista está vacía
                if (empty($listavotaciones)) {
                    return $this->respond(["message" => "No hay votaciones disponibles"], 204);
                }

                return $this->respond(["status" => "success", "data" => $listavotaciones], 200);
            } catch (\Exception $e) {
                return $this->respond([
                    "status" => "error",
                    "message" => "Error en el servidor",
                    "error" => $e->getMessage()
                ], 500);
            }
        }

        public function borrarVoto()
        {
            try {
                $vot_codigo = $this->request->getJSON()->vot_codigo ?? null;

                if (!$vot_codigo) {
                    return $this->failValidationErrors("El código del voto es obligatorio.");
                }

                // Verifica si el voto existe
                $voto = $this->modelvts->where('vot_codigo', $vot_codigo)->first();

                if (!$voto) {
                    return $this->failNotFound("No se encontró el voto con código: " . $vot_codigo);
                }

                // Elimina el voto
                $this->modelvts->delete($vot_codigo);

                return $this->respond(["status" => "success", "message" => "Voto eliminado correctamente."], 200);
            } catch (\Exception $e) {
                return $this->failServerError("Error al eliminar el voto: " . $e->getMessage());
            }
        }


    }
    